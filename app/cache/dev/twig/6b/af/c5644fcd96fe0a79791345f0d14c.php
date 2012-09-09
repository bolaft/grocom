<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6bafc5644fcd96fe0a79791345f0d14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  27 => 3,  77 => 16,  71 => 15,  64 => 11,  52 => 9,  37 => 8,  34 => 7,  29 => 6,  85 => 41,  75 => 33,  68 => 29,  63 => 27,  58 => 24,  54 => 23,  45 => 21,  35 => 14,  32 => 13,  30 => 4,  53 => 11,  48 => 10,  41 => 7,  22 => 4,  19 => 2,  17 => 1,  173 => 54,  170 => 53,  167 => 52,  162 => 38,  158 => 34,  155 => 33,  152 => 32,  149 => 31,  146 => 30,  143 => 29,  140 => 28,  137 => 27,  134 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  118 => 12,  115 => 11,  111 => 10,  108 => 9,  105 => 8,  97 => 4,  92 => 55,  90 => 52,  86 => 18,  84 => 49,  80 => 17,  78 => 46,  69 => 39,  67 => 38,  62 => 14,  60 => 10,  57 => 22,  55 => 21,  51 => 19,  49 => 22,  43 => 9,  40 => 11,  38 => 7,  31 => 4,  26 => 5,  23 => 1,);
    }
}
