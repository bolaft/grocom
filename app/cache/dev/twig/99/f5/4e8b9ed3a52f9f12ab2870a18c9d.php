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
        echo "/login\" method=\"post\" class=\"form-horizontal\">
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
        return array (  108 => 49,  105 => 48,  102 => 47,  72 => 21,  63 => 14,  60 => 13,  57 => 12,  51 => 9,  48 => 8,  45 => 7,  39 => 5,  30 => 3,);
    }
}
