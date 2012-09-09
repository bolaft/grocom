<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f7e7e01c33fb9bb7302f7f240adba039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  26 => 3,  22 => 3,  25 => 4,  23 => 5,  92 => 39,  86 => 6,  79 => 40,  29 => 6,  24 => 3,  19 => 2,  17 => 1,  69 => 14,  63 => 10,  58 => 9,  49 => 6,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 44,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 35,  96 => 34,  91 => 33,  82 => 30,  77 => 39,  75 => 26,  57 => 22,  50 => 13,  46 => 14,  44 => 8,  39 => 5,  33 => 7,  30 => 9,  27 => 4,  135 => 54,  129 => 50,  122 => 46,  116 => 42,  113 => 41,  108 => 40,  104 => 38,  102 => 37,  94 => 32,  89 => 29,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 20,  67 => 20,  62 => 16,  59 => 15,  55 => 8,  51 => 11,  48 => 10,  41 => 6,  38 => 8,  35 => 8,  31 => 4,  28 => 3,);
    }
}
