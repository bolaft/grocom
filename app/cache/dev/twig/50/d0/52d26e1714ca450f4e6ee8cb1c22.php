<?php

/* FrameNewsletter:modal:subscription.html.twig */
class __TwigTemplate_50d052d26e1714ca450f4e6ee8cb1c22 extends Twig_Template
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
        echo "auto-modal";
    }

    // line 5
    public function block_id($context, array $blocks = array())
    {
        echo "subscription";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <i class=\"icon-newsletter\"></i> Subscription
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
        if ((array_key_exists("subscription", $context) && ($this->getContext($context, "subscription") == true))) {
            // line 14
            echo "        <p>
            <h4>Your email was successfuly registered!</h4>
        </p>
        <p>
            If you ever wish to unsubscribe, you can do so at any time by sending an email to:
            </br>
        <div><a href=mailto:unsubscribe@";
            // line 20
            echo twig_escape_filter($this->env, $this->getContext($context, "domain"), "html", null, true);
            echo ">unsubscribe@";
            echo twig_escape_filter($this->env, $this->getContext($context, "domain"), "html", null, true);
            echo "</a></div>
        </p>
    ";
        } else {
            // line 23
            echo "        <p>
            ";
            // line 24
            if ((array_key_exists("subscription_error", $context) && ($this->getContext($context, "subscription_error") == "alreadyExists"))) {
                // line 25
                echo "                <h4>This email address is already registered.</h4>
            ";
            } elseif ((array_key_exists("subscription_error", $context) && ($this->getContext($context, "subscription_error") == "invalidEmail"))) {
                // line 27
                echo "                <h4>This is not a valid email address.</h4>
            ";
            } elseif (array_key_exists("subscription_error", $context)) {
                // line 29
                echo "                <h4>This email address could not be registered.</h4>
            ";
            }
            // line 31
            echo "        </p>
        <form id=\"subscription-form\" action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
            echo "\" method=\"post\" class=\"form-horizontal\">
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

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        // line 45
        if ((array_key_exists("subscription", $context) && ($this->getContext($context, "subscription") == false))) {
            // line 46
            echo "        <input id=\"subscription-submit\" class=\"btn btn-primary\" type=\"submit\" value=\"Subscribe\">
    ";
        }
    }

    public function getTemplateName()
    {
        return "FrameNewsletter:modal:subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 46,  119 => 45,  114 => 44,  111 => 43,  97 => 32,  94 => 31,  90 => 29,  86 => 27,  82 => 25,  80 => 24,  77 => 23,  69 => 20,  61 => 14,  58 => 13,  55 => 12,  49 => 9,  46 => 8,  43 => 7,  37 => 5,  30 => 3,);
    }
}
