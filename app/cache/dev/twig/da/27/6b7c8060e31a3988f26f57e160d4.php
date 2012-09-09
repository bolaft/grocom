<?php

/* :modal:subscription.html.twig */
class __TwigTemplate_da276b7c8060e31a3988f26f57e160d4 extends Twig_Template
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
        echo " 
    ";
        // line 4
        $this->displayParentBlock("class", $context, $blocks);
        echo "
\tauto-modal
";
    }

    // line 8
    public function block_id($context, array $blocks = array())
    {
        echo " 
\tsubscription
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "    <i class=\"icon-newsletter\"></i> Subscription
    ";
        // line 14
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if ((array_key_exists("subscription", $context) && ($this->getContext($context, "subscription") == true))) {
            // line 19
            echo "        <p>
            <h4>Your email was successfuly registered!</h4>
        </p>
        <p>
            If you ever wish to unsubscribe, you can do so at any time by sending an email to:
            </br>
        <div><a href=mailto:unsubscribe@{\$domain}>unsubscribe@{\$domain}</a></div>
        </p>
    ";
        } else {
            // line 28
            echo "        <p>
            ";
            // line 29
            if ((array_key_exists("subscription_error", $context) && ($this->getContext($context, "subscription_error") == "alreadyExists"))) {
                // line 30
                echo "                <h4>This email address is already registered.</h4>
            ";
            } elseif ((array_key_exists("subscription_error", $context) && ($this->getContext($context, "subscription_error") == "invalidEmail"))) {
                // line 32
                echo "                <h4>This is not a valid email address.</h4>
            ";
            } elseif (array_key_exists("subscription_error", $context)) {
                // line 34
                echo "                <h4>This email address could not be registered.</h4>
            ";
            }
            // line 36
            echo "        </p>
        <form id=\"subscription-form\" action=\"index.php?p={\$page}\" method=\"post\" class=\"form-horizontal\">
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"registration_username\">Please try again:</label>
                <div class=\"controls\">
                    <input name=\"subscription_email\" type=\"text\" placeholder=\"Email...\" />
                </div> <!-- /controls -->
            </div>  <!-- /control-group -->
        </form>  <!-- /form-horizontal -->
    ";
        }
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "    <span class=\"pull-left\">No account? <a data-dismiss=\"modal\" data-toggle=\"modal\" href=\"#register\">Register</a></span>
    ";
        // line 50
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <input id=\"login-submit\" class=\"btn btn-primary\" type=\"submit\" value=\"Log in\">
";
    }

    public function getTemplateName()
    {
        return ":modal:subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 50,  113 => 49,  110 => 48,  96 => 36,  92 => 34,  88 => 32,  84 => 30,  82 => 29,  79 => 28,  68 => 19,  65 => 18,  62 => 17,  56 => 14,  53 => 13,  50 => 12,  42 => 8,  35 => 4,  30 => 3,);
    }
}
