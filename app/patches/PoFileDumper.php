<?php

namespace Symfony\Component\Translation\Dumper;

use Symfony\Component\Translation\Dumper\FileDumper;
use Symfony\Component\Translation\MessageCatalogue;

/**
 * @author Soufian Salim <soufi@nsal.im>
 * @see    Symfony\Component\Translation\Dumper\PoFileDumper
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

        // save a file for each domain
        foreach ($messages->getDomains() as $domain) {
            $file = $domain.'.'.$messages->getLocale().'.'.$this->getExtension();
            // backup
            $fullpath = $options['path'].'/'.$file;
            if (file_exists($fullpath)) {
                copy($fullpath, $fullpath.'~');
            }
            // save file
            file_put_contents($fullpath, $this->format($messages, $fullpath, $domain), FILE_APPEND);
        }
    }

    /**
     * Transforms the delta of a domain of a message catalogue to its string representation.
     *
     * @param  MessageCatalogue $messages
     * @param  string $file
     * @param  string $domain
     * @return The string representation
     */
    public function format(MessageCatalogue $messages, $file, $domain = 'messages')
    {
        $output  = '';
        $content = file_exists($file) ? file_get_contents($file) : '';

        foreach ($messages->all($domain) as $source => $target) {
            if(!strpos($source, '"') && null !== $source && '' !== $source && 0 == preg_match('/^[0-9\-]+$/', $source)){
                $msgid = sprintf('msgid "%s"', $this->escape($source));

                if(!strpos($content, $msgid)){
                    $output .= '#: message extracted from source' . PHP_EOL;
                    $output .= $msgid . PHP_EOL;
                    $output .= 'msgstr ""' . PHP_EOL;
                }
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
