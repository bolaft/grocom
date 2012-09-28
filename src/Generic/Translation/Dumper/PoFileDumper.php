<?php

namespace Generic\Translation\Dumper;

use Symfony\Component\Translation\Dumper\PoFileDumper;
use Symfony\Component\Translation\Dumper\FileDumper;
use Symfony\Component\Translation\MessageCatalogue;

/**
 * PoFileDumper génère une nouvelle entrée vide au format po.
 *
 * @author Soufian Salim <soufi@nsal.im>
 */
class PoFileDumper extends FileDumper
{
    /**
     * {@inheritDoc}
     */
    public function format(MessageCatalogue $messages, $domain = 'messages')
    {
        $output = '';
        $newLine = false;
        foreach ($messages->all($domain) as $source => $target) {
            if ($newLine) {
              $output .= "\n";
            } else {
              $newLine = true;
            }
            $output .= sprintf('#: extracted message'."\n");
            $output .= sprintf('msgid "%s"'."\n", $this->escape($source));
            $output .= sprintf('msgstr ""', $this->escape($target));
        }

        return $output;
    }
}
