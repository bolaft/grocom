<?php

/* FrameDebug:modal:debug.html.twig */
class __TwigTemplate_3d0cad66fa8a5687520cc3bdc7c67aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":templates:modal.html.twig");

        $this->blocks = array(
            'class' => array($this, 'block_class'),
            'id' => array($this, 'block_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":templates:modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_class($context, array $blocks = array())
    {
        $this->displayParentBlock("class", $context, $blocks);
    }

    // line 5
    public function block_id($context, array $blocks = array())
    {
        echo "modal-debug";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <i class=\"icon-debug\"></i> Debug
    ";
        // line 9
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <ul id=\"debug-tabs\" class=\"nav nav-tabs\">
        <li><a href=\"#debug-globals\" data-toggle=\"tab\">Globals</a></li>
        <li><a href=\"#debug-krumo\" data-toggle=\"tab\">Krumo</a></li>
        <li><a href=\"#debug-smarty\" data-toggle=\"tab\">Smarty</a></li>
    </ul> <!-- /debug-tabs -->
    <div class=\"tab-content\">
        <div id=\"debug-globals\" class=\"tab-pane fade\">
            <div class=\"subnav subnav-fixed\">
                <ul class=\"nav nav-pills\">
                    <li>
                        <a style=\"color: orange;\" href=\"#globals-session\">Session</a>
                    </li>
                    <li>
                        <a style=\"color: green;\" href=\"#globals-post\">Post</a>
                    </li>
                    <li>
                        <a style=\"color: blue;\" href=\"#globals-get\">Get</a>
                    </li>
                    <li>
                        <a style=\"color: purple;\" href=\"#globals-cookies\">Cookies</a>
                    </li>
                    <li>
                        <a style=\"color: brown;\" href=\"#globals-env\">Env</a>
                    </li>
                    <li>
                        <a style=\"color: red;\" href=\"#globals-server\">Server</a>
                    </li>
                </ul>
            </div> <!-- /subnav -->
        </div> <!-- /debug-globals -->
    </div> <!-- /tab-content -->
";
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrameDebug:modal:debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  106 => 43,  65 => 7,  45 => 8,  136 => 62,  100 => 36,  85 => 29,  76 => 23,  61 => 14,  173 => 54,  170 => 53,  167 => 52,  155 => 33,  149 => 31,  143 => 64,  140 => 28,  118 => 12,  105 => 48,  36 => 5,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 32,  148 => 57,  145 => 56,  141 => 63,  134 => 26,  132 => 60,  127 => 46,  123 => 44,  109 => 44,  93 => 31,  90 => 52,  54 => 12,  133 => 44,  124 => 41,  111 => 10,  80 => 47,  60 => 13,  52 => 10,  97 => 4,  95 => 47,  88 => 29,  78 => 46,  71 => 14,  72 => 23,  64 => 15,  53 => 11,  42 => 7,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 38,  158 => 34,  156 => 60,  153 => 59,  146 => 30,  142 => 54,  137 => 27,  126 => 58,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 4,  40 => 6,  26 => 2,  22 => 1,  25 => 4,  23 => 1,  92 => 46,  86 => 50,  79 => 24,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 39,  63 => 14,  58 => 13,  49 => 9,  43 => 7,  37 => 5,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 13,  50 => 1,  46 => 8,  44 => 11,  39 => 5,  33 => 5,  30 => 3,  27 => 3,  135 => 50,  129 => 59,  122 => 46,  116 => 42,  113 => 40,  108 => 49,  104 => 24,  102 => 47,  94 => 33,  89 => 31,  87 => 32,  84 => 49,  81 => 27,  73 => 11,  70 => 10,  67 => 38,  62 => 35,  59 => 23,  55 => 12,  51 => 9,  48 => 9,  41 => 8,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
