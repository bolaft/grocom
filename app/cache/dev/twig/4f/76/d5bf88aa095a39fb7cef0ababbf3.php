<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_4f76d5bf88aa095a39fb7cef0ababbf3 extends Twig_Template
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
        echo "<div id=\"header\" class=\"clear_fix\">
    <h1>
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logo_symfony_profiler.gif"), "html", null, true);
        echo "\" alt=\"Symfony profiler\"/>
    </h1>

    <div class=\"search\">
        <form method=\"get\" action=\"http://symfony.com/search\">
            <div class=\"form_row\">
                <label for=\"search_id\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/grey_magnifier.png"), "html", null, true);
        echo "\" alt=\"Search on Symfony website\"/>
                </label>

                <input name=\"q\" id=\"search_id\" type=\"search\" placeholder=\"Search on Symfony website\"/>

                <button type=\"submit\">
                    <span class=\"border_l\">
                        <span class=\"border_r\">
                            <span class=\"btn_bg\">OK</span>
                        </span>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 39,  61 => 28,  21 => 3,  167 => 52,  164 => 51,  149 => 31,  143 => 29,  140 => 28,  118 => 12,  105 => 8,  36 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 50,  152 => 32,  148 => 57,  145 => 56,  141 => 55,  134 => 26,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 50,  54 => 14,  133 => 44,  124 => 41,  111 => 10,  80 => 45,  60 => 27,  52 => 12,  97 => 4,  95 => 21,  88 => 29,  78 => 44,  71 => 37,  72 => 17,  64 => 35,  53 => 23,  42 => 7,  34 => 7,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 36,  153 => 59,  146 => 30,  142 => 54,  137 => 27,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 38,  47 => 15,  32 => 8,  40 => 9,  26 => 5,  22 => 3,  25 => 5,  23 => 1,  92 => 53,  86 => 48,  79 => 20,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 37,  63 => 28,  58 => 26,  49 => 18,  43 => 14,  37 => 8,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 43,  77 => 25,  75 => 18,  57 => 27,  50 => 13,  46 => 10,  44 => 11,  39 => 12,  33 => 5,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 9,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 47,  81 => 26,  73 => 21,  70 => 26,  67 => 36,  62 => 33,  59 => 23,  55 => 21,  51 => 17,  48 => 10,  41 => 8,  38 => 8,  35 => 6,  31 => 10,  28 => 7,);
    }
}
