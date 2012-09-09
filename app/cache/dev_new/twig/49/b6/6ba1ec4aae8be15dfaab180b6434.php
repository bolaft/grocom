<?php

/* WebProfilerBundle:Collector:timer.html.twig */
class __TwigTemplate_49b66ba1ec4aae8be15dfaab180b6434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <img width=\"16\" height=\"28\" alt=\"Timers\" style=\"vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAiNJREFUeNpi/P//PwMlgImBQjDwBrCcO3cOq0RRUdF3ZH5fXx8nTVzAePbsWcq8gMwxMjJiSUlJcXv9+nXm169fbf78+SMAVsTC8paXl3ePmJjYjJkzZx4GevsviheAGhmBguL+/v4779y5s/Xjx48+MM0gAGQLv3//PvzmzZv7AwMD19y+fVsEpAfsBWBCYly8eLHcsmXLjnz//l2GGGcDXXM1IyPD2dvb+xXIBTwbN25chU3zgQMHwBgdfP78WXvp0qVzgUwuprq6utg3b96YkRp4z549854wYYI7071791LJjYFLly7lM7148UKHXAOALtdnAYYwCyGFyOHg4OAAZ3/69ImfopTIzMz8j4WVlfXf79+/sRqEbBs2wMfH94tJXV39DbkuUFFReclkb29/jlwDPD09jzGFhoZu0NTU/EKqZktLyzdOTk7bQX4/U1tbu1pcXPwvsZoVFBR+lZeXLwUyz4MMuCMlJbWmv79/o56e3k9Cms3MzL5PmjRphYCAwCYg9wE4MwEZwkBsDsReO3fudN+zZ4/shQsX2ICxA9bEzs7OYGBg8NPHx+eBra3tdqDQVpDLgfgjuEABZk2QS3hBAQvExkBsAHIpMAsLAOP6PzC63gP590FOBmJQCXQPiL8Ai4D/KCUS0CBWIAUqB8SAWAiIQeUgqOIAlY/vgPgVEH8AavyDtUQCSoDc/BqEoQUGLIH9A9mGtUwc8JoJIMAAS9XemfR7crQAAAAASUVORK5CYII=\"/>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, sprintf("%.0f", ($this->getAttribute($this->getContext($context, "collector"), "time") * 1000)), "html", null, true);
        echo " ms
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:timer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 124,  262 => 121,  258 => 120,  255 => 119,  250 => 118,  248 => 117,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 91,  164 => 63,  151 => 54,  83 => 26,  154 => 55,  150 => 43,  119 => 39,  66 => 19,  68 => 19,  21 => 3,  112 => 45,  106 => 35,  65 => 18,  45 => 8,  136 => 62,  100 => 32,  85 => 28,  76 => 39,  61 => 17,  173 => 54,  170 => 53,  167 => 52,  155 => 33,  149 => 31,  143 => 49,  140 => 48,  118 => 12,  105 => 48,  36 => 8,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 32,  148 => 57,  145 => 56,  141 => 63,  134 => 26,  132 => 44,  127 => 46,  123 => 35,  109 => 36,  93 => 31,  90 => 52,  54 => 19,  133 => 44,  124 => 41,  111 => 37,  80 => 25,  60 => 16,  52 => 10,  97 => 4,  95 => 30,  88 => 32,  78 => 46,  71 => 20,  72 => 17,  64 => 21,  53 => 23,  42 => 10,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 71,  171 => 67,  162 => 38,  158 => 34,  156 => 60,  153 => 59,  146 => 30,  142 => 54,  137 => 47,  126 => 58,  120 => 39,  117 => 44,  103 => 36,  74 => 21,  47 => 11,  32 => 8,  40 => 8,  26 => 3,  22 => 3,  25 => 5,  23 => 1,  92 => 46,  86 => 27,  79 => 20,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 39,  63 => 28,  58 => 16,  49 => 12,  43 => 10,  37 => 5,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 41,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 31,  82 => 27,  77 => 22,  75 => 18,  57 => 27,  50 => 12,  46 => 11,  44 => 14,  39 => 12,  33 => 7,  30 => 4,  27 => 6,  135 => 41,  129 => 43,  122 => 46,  116 => 42,  113 => 40,  108 => 49,  104 => 24,  102 => 47,  94 => 32,  89 => 28,  87 => 32,  84 => 49,  81 => 27,  73 => 11,  70 => 10,  67 => 38,  62 => 35,  59 => 23,  55 => 14,  51 => 18,  48 => 9,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
