<?php

namespace Generic\Log\Processor;

use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Traite les logs
 *
 * @author Soufian Salim <soufi@nsal.im>
 */
class SessionRequestProcessor
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @var string
     */
    private $token;

    /**
     * Constructor
     *
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Traite un enregistrement
     *
     * @param  array $record
     * @return array
     */
    public function processRecord(array $record)
    {
        if (null === $this->token) {
            try {
                $this->token = substr($this->session->getId(), 0, 8);
            } catch (\RuntimeException $e) {
                $this->token = '?';
            }
            $this->token .= '-' . substr(uniqid(), -8);
        }
        $record['extra']['token'] = $this->token;

        return $record;
    }
}