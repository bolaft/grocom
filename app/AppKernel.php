<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\DoctrineBundle\DoctrineBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Generic\BackOfficeBundle\GenericBackOfficeBundle(),
            new Generic\CommentBundle\GenericCommentBundle(),
            new Generic\EAVBundle\GenericEAVBundle(),
            new Generic\FacebookBundle\GenericFacebookBundle(),
            new Generic\ForumBundle\GenericForumBundle(),
            new Generic\MailBundle\GenericMailBundle(),
            new Generic\NewsletterBundle\GenericNewsletterBundle(),
            new Generic\PaginatorBundle\GenericPaginatorBundle(),
            new Generic\SearchBundle\GenericSearchBundle(),
            new Generic\StyleBundle\GenericStyleBundle(),
            new Generic\TwitterBundle\GenericTwitterBundle(),
            new Generic\UserBundle\GenericUserBundle(),
            new Grocom\ManufacturerBundle\GrocomManufacturerBundle(),
            new Grocom\OrderBundle\GrocomOrderBundle(),
            new Grocom\ProductBundle\GrocomProductBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
