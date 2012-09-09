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
        return array (  95 => 47,  54 => 12,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  173 => 54,  170 => 53,  167 => 52,  162 => 38,  158 => 34,  155 => 33,  152 => 32,  149 => 31,  146 => 30,  143 => 29,  140 => 28,  137 => 27,  134 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  118 => 12,  115 => 11,  111 => 10,  108 => 9,  105 => 8,  97 => 4,  92 => 46,  90 => 52,  86 => 50,  84 => 49,  80 => 47,  78 => 46,  69 => 39,  67 => 38,  62 => 35,  60 => 23,  57 => 13,  55 => 21,  51 => 19,  49 => 18,  43 => 14,  40 => 11,  38 => 8,  31 => 4,  26 => 2,  23 => 1,);
    }
}
