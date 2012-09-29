<?php

namespace Symfony\Component\Translation\Dumper;

use Symfony\Component\Translation\Dumper\FileDumper;
use Symfony\Component\Translation\MessageCatalogue;

/**
 * @author Soufian Salim <soufi@nsal.im>
 * @see    Symfony\Component\Translation\Dumper\PoFileDumper
 * @see    Symfony\Component\Translation\Dumper\FileDumper
 */
class PoFileDumper extends FileDumper
{
    /**
     * {@inheritDoc}
     */
    public function dump(MessageCatalogue $messages, $options = array())
    {
        if (!array_key_exists('path', $options)) {
            throw new \InvalidArgumentException('The file dumper needs a path option.');
        }

        $file = 'source.'.$messages->getLocale().'.'.$this->getExtension();
        // backup
        $fullpath = $options['path'].'/'.$file;
        if (file_exists($fullpath)) {
            copy($fullpath, $fullpath.'~');
        }
        // save file
        file_put_contents($fullpath, $this->format($messages, $fullpath), FILE_APPEND);
    }

    /**
     * {@inheritDoc}
     */
    public function format(MessageCatalogue $messages, $fullpath, $domain = 'messages')
    {
        $header  = 'msgid ""' . PHP_EOL . 'msgstr ""' . PHP_EOL;
        $header .= 'Project-Id-Version: GROCOM' . PHP_EOL;
        $header .= 'POT-Creation-Date: ' . PHP_EOL;
        $header .= 'PO-Revision-Date: ' . PHP_EOL;
        $header .= 'Last-Translator: GROCOM <contact@grocom.com>' . PHP_EOL;
        $header .= 'Language-Team: ' . PHP_EOL;
        $header .= 'MIME-Version: 1.0' . PHP_EOL;
        $header .= 'Content-Type: text/plain; charset=utf-8' . PHP_EOL;
        $header .= 'Content-Transfer-Encoding: 8bit' . PHP_EOL;
        $header .= 'X-Poedit-SourceCharset: utf-8' . PHP_EOL . PHP_EOL;

        $file_exists = file_exists($fullpath);
        $content     = $file_exists ? file_get_contents($fullpath) : '';
        $output      = $file_exists ? '' : $header;

        foreach ($messages->all($domain) as $source => $target) {
            $source = sprintf('msgid "%s"', $this->escape($source));
            $target = sprintf('msgstr "%s"', $this->escape($target));

            if(!strpos($content, $source)){
                $output .= $source . PHP_EOL;
                $output .= 'msgstr ""' . PHP_EOL . PHP_EOL;
            }
        }

        return $output;
    }

    /**
     * {@inheritDoc}
     */
    protected function getExtension()
    {
        return 'po';
    }


    /**
     * Escapes a string
     * 
     * @param  string $str
     * @return string
     */
    private function escape($str)
    {
        return addcslashes($str, "\0..\37\42\134");
    }
}
