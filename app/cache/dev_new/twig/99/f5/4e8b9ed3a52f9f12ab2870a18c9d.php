<?php

/* FrameUser:modal:login.html.twig */
class __TwigTemplate_99f54e8b9ed3a52f9f12ab2870a18c9d extends Twig_Template
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
        if ((array_key_exists("login", $context) && ($this->getContext($context, "login") == false))) {
            echo " auto-modal ";
        }
    }

    // line 5
    public function block_id($context, array $blocks = array())
    {
        echo "login";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <i class=\"icon-signin\"></i> Login
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
        echo "    ";
        if ((array_key_exists("login", $context) && ($this->getContext($context, "login") == false))) {
            // line 14
            echo "        <p>
            <h4>The username or password is incorrect.</h4>
        </p>
        <p>
            Please try again:
        </p>
    ";
        }
        // line 21
        echo "    <form id=\"login-form\" action=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\">
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"login_username\">Username:</label>
            <div class=\"controls\">
                <input class=\"input\" id=\"login_username\" name=\"login_username\" type=\"text\" placeholder=\"Username...\">
            </div> <!-- /controls -->
        </div> <!-- /control-group -->
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"login_username\">Password:</label>
            <div class=\"controls\">
                <input class=\"input\" id=\"login_password\" name=\"login_password\" type=\"password\" placeholder=\"Password...\">
            </div> <!-- /controls -->
        </div> <!-- /control-group -->
        <div class=\"control-group\">
            <div class=\"controls\">
                <input id=\"login_remember\" name=\"login_remember\" type=\"checkbox\" class=\"styled\">
                <label for=\"login_remember\">Remember me</label>
            </div> <!-- /controls -->
        </div> <!-- /control-group -->
        <div class=\"alert\" id=\"login_remember_warning\">
            <button class=\"close\" data-dismiss=\"alert\">×</button>
            <strong>Be careful:</strong> don't tick this checkbox if you are using a public computer!
        </div> <!-- /alert -->
    </form>  <!-- /form-horizontal -->
";
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "    <span class=\"pull-left\">No account? <a data-dismiss=\"modal\" data-toggle=\"modal\" href=\"#registration\">Register</a></span>
    ";
        // line 49
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <input id=\"login-submit\" class=\"btn btn-primary\" type=\"submit\" value=\"Log in\">
";
    }

    public function getTemplateName()
    {
        return "FrameUser:modal:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 7,  45 => 7,  136 => 62,  100 => 36,  85 => 27,  76 => 23,  61 => 14,  173 => 54,  170 => 53,  167 => 52,  155 => 33,  149 => 31,  143 => 64,  140 => 28,  118 => 12,  105 => 48,  36 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 32,  148 => 57,  145 => 56,  141 => 63,  134 => 26,  132 => 60,  127 => 46,  123 => 44,  109 => 39,  93 => 31,  90 => 52,  54 => 14,  133 => 44,  124 => 41,  111 => 10,  80 => 47,  60 => 13,  52 => 10,  97 => 4,  95 => 21,  88 => 29,  78 => 46,  71 => 14,  72 => 21,  64 => 15,  53 => 11,  42 => 7,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 38,  158 => 34,  156 => 60,  153 => 59,  146 => 30,  142 => 54,  137 => 27,  126 => 58,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 4,  40 => 6,  26 => 2,  22 => 1,  25 => 4,  23 => 1,  92 => 55,  86 => 50,  79 => 24,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 39,  63 => 14,  58 => 13,  49 => 9,  43 => 10,  37 => 7,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 12,  50 => 1,  46 => 8,  44 => 11,  39 => 5,  33 => 5,  30 => 3,  27 => 3,  135 => 50,  129 => 59,  122 => 46,  116 => 42,  113 => 40,  108 => 49,  104 => 24,  102 => 47,  94 => 33,  89 => 29,  87 => 32,  84 => 49,  81 => 25,  73 => 11,  70 => 10,  67 => 38,  62 => 35,  59 => 23,  55 => 21,  51 => 9,  48 => 8,  41 => 8,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
