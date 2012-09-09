<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_63c2a26ab0c7d8e74a3727290056e24a extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (twig_in_filter($this->getAttribute($this->getContext($context, "log"), "priorityName"), array(0 => "EMERG", 1 => "ERR", 2 => "CRIT", 3 => "ALERT", 4 => "ERROR", 5 => "CRITICAL"))) {
                echo " class=\"error\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  72 => 16,  42 => 10,  104 => 24,  95 => 21,  88 => 19,  82 => 19,  25 => 4,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  156 => 60,  153 => 59,  142 => 54,  135 => 50,  129 => 47,  126 => 46,  120 => 45,  117 => 44,  113 => 43,  103 => 36,  99 => 34,  94 => 31,  74 => 27,  70 => 26,  59 => 23,  47 => 19,  39 => 9,  79 => 40,  46 => 14,  33 => 7,  24 => 3,  44 => 11,  27 => 3,  77 => 28,  71 => 14,  64 => 15,  52 => 9,  37 => 8,  34 => 7,  29 => 5,  85 => 41,  75 => 16,  68 => 29,  63 => 27,  58 => 24,  54 => 23,  45 => 21,  35 => 14,  32 => 11,  30 => 4,  53 => 13,  48 => 10,  41 => 7,  22 => 3,  19 => 2,  17 => 1,  173 => 54,  170 => 53,  167 => 52,  162 => 63,  158 => 61,  155 => 33,  152 => 32,  149 => 31,  146 => 55,  143 => 29,  140 => 28,  137 => 51,  134 => 26,  131 => 48,  128 => 24,  125 => 23,  121 => 13,  118 => 12,  115 => 11,  111 => 10,  108 => 9,  105 => 8,  97 => 22,  92 => 20,  90 => 52,  86 => 6,  84 => 49,  80 => 17,  78 => 17,  69 => 39,  67 => 12,  62 => 24,  60 => 10,  57 => 9,  55 => 14,  51 => 19,  49 => 12,  43 => 9,  40 => 7,  38 => 6,  31 => 4,  26 => 5,  23 => 4,);
    }
}
