<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_d6861720d276259dfbe8d567819ccaa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configure.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/images/logo-small.gif"), "html", null, true);
        echo "\" alt=\"Symfony\" />
            </div>
            <div id=\"symfony-content\">
                ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "            </div>
            <div class=\"version\">Symfony Standard Edition v.";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "</div>
        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  180 => 68,  175 => 66,  114 => 34,  170 => 63,  157 => 55,  130 => 48,  56 => 14,  45 => 9,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  151 => 53,  106 => 35,  100 => 27,  83 => 26,  65 => 18,  154 => 54,  150 => 43,  119 => 47,  85 => 28,  66 => 15,  68 => 19,  76 => 39,  61 => 6,  21 => 3,  167 => 52,  164 => 59,  149 => 31,  143 => 49,  140 => 52,  118 => 36,  105 => 8,  36 => 5,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 32,  148 => 57,  145 => 49,  141 => 55,  134 => 26,  132 => 43,  127 => 46,  123 => 38,  109 => 36,  93 => 33,  90 => 36,  54 => 13,  133 => 49,  124 => 41,  111 => 33,  80 => 25,  60 => 16,  52 => 17,  97 => 26,  95 => 30,  88 => 32,  78 => 44,  71 => 20,  72 => 21,  64 => 21,  53 => 13,  42 => 10,  34 => 5,  224 => 91,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 63,  158 => 57,  156 => 56,  153 => 59,  146 => 30,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 44,  103 => 28,  74 => 21,  47 => 15,  32 => 6,  40 => 8,  26 => 3,  22 => 3,  25 => 5,  23 => 1,  92 => 23,  86 => 27,  79 => 24,  29 => 6,  24 => 3,  19 => 1,  17 => 1,  69 => 21,  63 => 28,  58 => 16,  49 => 16,  43 => 12,  37 => 8,  20 => 2,  139 => 47,  131 => 25,  128 => 24,  125 => 41,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 31,  82 => 25,  77 => 23,  75 => 18,  57 => 27,  50 => 12,  46 => 13,  44 => 10,  39 => 6,  33 => 7,  30 => 4,  27 => 3,  135 => 41,  129 => 43,  122 => 46,  116 => 42,  113 => 43,  108 => 9,  104 => 40,  102 => 37,  94 => 32,  89 => 22,  87 => 32,  84 => 29,  81 => 29,  73 => 23,  70 => 26,  67 => 15,  62 => 22,  59 => 21,  55 => 14,  51 => 18,  48 => 10,  41 => 12,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
