<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_fbea665bd917be288e232f48e4efa43b extends Twig_Template
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
        $context["icon"] = ('' === $tmp = "        <img width=\"13\" height=\"28\" alt=\"Memory Usage\" style=\"vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcCAYAAAC6YTVCAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJBJREFUeNpi/P//PwOpgImBDDAcNbE4ODiAg+/AgQOC586d+4BLoZGRkQBQ7Xt0mxQIWKCAzXkCBDQJDEBAIHOKiooicSkEBtTz0WQ0xFI5Mqevr285HrUOMAajvb09ySULk5+f3w1SNIDUMwKLsAIg256IrAECoEx6EKQJlLkkgJiDCE0/gPgF4+AuLAECDAAolCeEmdURAgAAAABJRU5ErkJggg==\"/>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, sprintf("%.0f", ($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024)), "html", null, true);
        echo " KB
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  180 => 68,  175 => 66,  114 => 34,  157 => 55,  130 => 48,  56 => 14,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  164 => 59,  151 => 53,  83 => 26,  154 => 54,  150 => 43,  119 => 47,  66 => 15,  68 => 19,  21 => 3,  112 => 45,  106 => 35,  65 => 18,  45 => 9,  136 => 62,  100 => 27,  85 => 28,  76 => 39,  61 => 17,  173 => 54,  170 => 63,  167 => 52,  155 => 33,  149 => 31,  143 => 49,  140 => 52,  118 => 36,  105 => 48,  36 => 8,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 32,  148 => 57,  145 => 49,  141 => 63,  134 => 26,  132 => 43,  127 => 46,  123 => 38,  109 => 36,  93 => 31,  90 => 36,  54 => 13,  133 => 49,  124 => 41,  111 => 33,  80 => 25,  60 => 16,  52 => 13,  97 => 26,  95 => 30,  88 => 32,  78 => 46,  71 => 20,  72 => 17,  64 => 21,  53 => 23,  42 => 10,  34 => 5,  224 => 91,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 38,  158 => 57,  156 => 56,  153 => 59,  146 => 30,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 44,  103 => 28,  74 => 21,  47 => 11,  32 => 6,  40 => 8,  26 => 3,  22 => 3,  25 => 5,  23 => 1,  92 => 23,  86 => 27,  79 => 28,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 21,  63 => 28,  58 => 16,  49 => 12,  43 => 12,  37 => 5,  20 => 2,  139 => 47,  131 => 25,  128 => 24,  125 => 41,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 31,  82 => 20,  77 => 22,  75 => 18,  57 => 27,  50 => 12,  46 => 13,  44 => 10,  39 => 12,  33 => 7,  30 => 4,  27 => 6,  135 => 41,  129 => 43,  122 => 46,  116 => 42,  113 => 43,  108 => 49,  104 => 40,  102 => 47,  94 => 32,  89 => 22,  87 => 32,  84 => 29,  81 => 29,  73 => 23,  70 => 10,  67 => 38,  62 => 22,  59 => 21,  55 => 20,  51 => 18,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
