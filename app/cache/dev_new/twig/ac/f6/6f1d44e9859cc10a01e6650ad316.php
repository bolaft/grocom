<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_acf66f1d44e9859cc10a01e6650ad316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  271 => 124,  262 => 121,  258 => 120,  255 => 119,  250 => 118,  248 => 117,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 91,  164 => 63,  151 => 54,  83 => 26,  154 => 55,  150 => 43,  119 => 39,  66 => 20,  68 => 19,  21 => 3,  112 => 45,  106 => 35,  65 => 18,  45 => 9,  136 => 62,  100 => 32,  85 => 28,  76 => 39,  61 => 17,  173 => 54,  170 => 53,  167 => 52,  155 => 33,  149 => 31,  143 => 49,  140 => 48,  118 => 12,  105 => 48,  36 => 5,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 32,  148 => 57,  145 => 56,  141 => 63,  134 => 26,  132 => 44,  127 => 46,  123 => 35,  109 => 36,  93 => 31,  90 => 52,  54 => 13,  133 => 44,  124 => 41,  111 => 37,  80 => 25,  60 => 16,  52 => 10,  97 => 4,  95 => 30,  88 => 32,  78 => 46,  71 => 20,  72 => 17,  64 => 21,  53 => 23,  42 => 8,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 71,  171 => 67,  162 => 38,  158 => 34,  156 => 60,  153 => 59,  146 => 30,  142 => 54,  137 => 47,  126 => 58,  120 => 39,  117 => 44,  103 => 36,  74 => 21,  47 => 11,  32 => 8,  40 => 8,  26 => 3,  22 => 3,  25 => 5,  23 => 1,  92 => 46,  86 => 27,  79 => 20,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 21,  63 => 28,  58 => 16,  49 => 12,  43 => 10,  37 => 5,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 41,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 31,  82 => 27,  77 => 22,  75 => 24,  57 => 27,  50 => 12,  46 => 11,  44 => 14,  39 => 12,  33 => 7,  30 => 4,  27 => 6,  135 => 41,  129 => 43,  122 => 46,  116 => 42,  113 => 40,  108 => 49,  104 => 24,  102 => 47,  94 => 32,  89 => 28,  87 => 32,  84 => 29,  81 => 28,  73 => 23,  70 => 10,  67 => 38,  62 => 35,  59 => 23,  55 => 14,  51 => 18,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
