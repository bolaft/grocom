<?php

/* FramePage::empty.html.twig */
class __TwigTemplate_b62a632bcda268643e8f378bba0e60f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::public.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::public.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 
    ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Page Not Found 
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"row\">
\t\t<div class=\"span4\">
\t\t\t<h1>Page Not Found</h1>
\t\t</div>
\t</div> <!-- /row -->
";
    }

    public function getTemplateName()
    {
        return "FramePage::empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  38 => 7,  32 => 4,  27 => 3,);
    }
}
