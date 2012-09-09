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
        <div><a href=mailto:unsubscribe@{\$domain}>unsubscribe@{\$domain}</a></div>
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
        echo "    <span class=\"pull-left\">No account? <a data-dismiss=\"modal\" data-toggle=\"modal\" href=\"#register\">Register</a></span>
    ";
        // line 45
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <input id=\"login-submit\" class=\"btn btn-primary\" type=\"submit\" value=\"Log in\">
";
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
        return array (  112 => 45,  106 => 43,  65 => 7,  45 => 7,  136 => 62,  100 => 36,  85 => 29,  76 => 23,  61 => 14,  173 => 54,  170 => 53,  167 => 52,  155 => 33,  149 => 31,  143 => 64,  140 => 28,  118 => 12,  105 => 48,  36 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 32,  148 => 57,  145 => 56,  141 => 63,  134 => 26,  132 => 60,  127 => 46,  123 => 44,  109 => 44,  93 => 31,  90 => 52,  54 => 14,  133 => 44,  124 => 41,  111 => 10,  80 => 47,  60 => 13,  52 => 10,  97 => 4,  95 => 21,  88 => 29,  78 => 46,  71 => 14,  72 => 23,  64 => 15,  53 => 11,  42 => 7,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 38,  158 => 34,  156 => 60,  153 => 59,  146 => 30,  142 => 54,  137 => 27,  126 => 58,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 4,  40 => 6,  26 => 2,  22 => 1,  25 => 4,  23 => 1,  92 => 32,  86 => 50,  79 => 24,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 39,  63 => 14,  58 => 13,  49 => 9,  43 => 7,  37 => 5,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 12,  50 => 1,  46 => 8,  44 => 11,  39 => 5,  33 => 5,  30 => 3,  27 => 3,  135 => 50,  129 => 59,  122 => 46,  116 => 42,  113 => 40,  108 => 49,  104 => 24,  102 => 47,  94 => 33,  89 => 31,  87 => 32,  84 => 49,  81 => 27,  73 => 11,  70 => 10,  67 => 38,  62 => 35,  59 => 23,  55 => 12,  51 => 9,  48 => 8,  41 => 8,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
