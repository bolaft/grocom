<?php

/* WebProfilerBundle:Profiler:notfound.html.twig */
class __TwigTemplate_f1bdc1acafbd8bb1abb77ab9991c1442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"resume\">
            <p>
                <strong>No request matching the token \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\".</strong>
            </p>
        </div>

        <div id=\"main\">
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 17
        $this->displayBlock('panel', $context, $blocks);
        // line 23
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 26
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array("token" => $this->getContext($context, "token")), array());
        // line 27
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => $this->getContext($context, "token")));
        // line 28
        echo "                </div>
            </div>
        </div>
    </div>

";
    }

    // line 17
    public function block_panel($context, array $blocks = array())
    {
        // line 18
        echo "                            <h2>Token not found</h2>
                            <p>
                                <em>No request matching the token \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\".</em>
                            </p>
                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:notfound.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 39,  61 => 28,  21 => 3,  167 => 52,  164 => 51,  149 => 31,  143 => 29,  140 => 28,  118 => 12,  105 => 8,  36 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 50,  152 => 32,  148 => 57,  145 => 56,  141 => 55,  134 => 26,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 50,  54 => 14,  133 => 44,  124 => 41,  111 => 10,  80 => 45,  60 => 27,  52 => 12,  97 => 4,  95 => 21,  88 => 29,  78 => 44,  71 => 37,  72 => 17,  64 => 35,  53 => 23,  42 => 7,  34 => 11,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 36,  153 => 59,  146 => 30,  142 => 54,  137 => 27,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 38,  47 => 15,  32 => 8,  40 => 9,  26 => 5,  22 => 3,  25 => 5,  23 => 1,  92 => 53,  86 => 48,  79 => 20,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 37,  63 => 28,  58 => 26,  49 => 18,  43 => 14,  37 => 8,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 43,  77 => 25,  75 => 18,  57 => 27,  50 => 13,  46 => 10,  44 => 11,  39 => 12,  33 => 5,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 9,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 47,  81 => 26,  73 => 21,  70 => 26,  67 => 36,  62 => 33,  59 => 23,  55 => 21,  51 => 17,  48 => 10,  41 => 8,  38 => 12,  35 => 6,  31 => 10,  28 => 7,);
    }
}
