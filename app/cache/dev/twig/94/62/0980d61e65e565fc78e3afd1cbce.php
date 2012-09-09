<?php

/* :modal:registration.html.twig */
class __TwigTemplate_94620980d61e65e565fc78e3afd1cbce extends Twig_Template
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
        echo " ";
        $this->displayParentBlock("class", $context, $blocks);
        if ((array_key_exists("registration", $context) && ($this->getContext($context, "registration") == false))) {
            echo " auto-modal ";
        }
    }

    // line 6
    public function block_id($context, array $blocks = array())
    {
        echo "registration";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "    <i class=\"icon-check\"></i> Registration
    ";
        // line 10
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ((array_key_exists("registration", $context) && ($this->getContext($context, "registration") == true))) {
            // line 15
            echo "        <p>
            <h4>You have been successfuly registered!</h4>
        </p>
        <p>
            Your password will be sent shortly to the email address that you provided.
        </p>
    ";
        } else {
            // line 22
            echo "        ";
            if (array_key_exists("registration_error", $context)) {
                // line 23
                echo "            <p>
                ";
                // line 24
                if (($this->getContext($context, "registration_error") == "alreadyExists")) {
                    // line 25
                    echo "                    <h4>This email or username is already registered.</h4>
                ";
                } elseif (($this->getContext($context, "registration_error") == "invalidInfos")) {
                    // line 27
                    echo "                    <h4>This email or username is invalid.</h4>
                ";
                } else {
                    // line 29
                    echo "                    <h4>This email or username could not be registered.</h4>
                ";
                }
                // line 31
                echo "            </p>
            <p>
                Please try again:
            </p>
        ";
            }
            // line 36
            echo "            <form id=\"registration-form\" action=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
            echo "\" method=\"post\" class=\"form-horizontal\">
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"registration_username\">Username:</label>
                    <div class=\"controls\">
                        <input class=\"input\" id=\"registration_username\" name=\"registration_username\" type=\"text\" placeholder=\"Username...\">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"registration_email\">Email:</label>
                    <div class=\"controls\">
                        <input class=\"input\" id=\"registration_email\" name=\"registration_email\" type=\"email\" placeholder=\"Email...\">
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
                <div class=\"control-group\">
                    <div class=\"controls\">
                        <p>By clicking registration your agree to our <a href=\"index.php?p=terms\">terms of use</a>.</p>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->
            </form>  <!-- /form-horizontal -->
    ";
        }
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        if (((!array_key_exists("registration", $context)) || ($this->getContext($context, "registration") != true))) {
            // line 60
            echo "    \t<span class=\"pull-left\">Already registered? <a data-dismiss=\"modal\" data-toggle=\"modal\" href=\"#login\">Login</a></span>
\t";
        }
        // line 62
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        // line 63
        if (((!array_key_exists("registration", $context)) || ($this->getContext($context, "registration") != true))) {
            // line 64
            echo "    \t<input id=\"registration-submit\" class=\"btn btn-primary\" type=\"submit\" value=\"Register\">
\t";
        }
    }

    public function getTemplateName()
    {
        return ":modal:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 64,  141 => 63,  136 => 62,  132 => 60,  129 => 59,  126 => 58,  100 => 36,  93 => 31,  89 => 29,  85 => 27,  81 => 25,  79 => 24,  76 => 23,  73 => 22,  64 => 15,  61 => 14,  58 => 13,  52 => 10,  49 => 9,  46 => 8,  40 => 6,  108 => 49,  105 => 48,  102 => 47,  72 => 21,  63 => 14,  60 => 13,  57 => 12,  51 => 9,  48 => 8,  45 => 7,  39 => 5,  30 => 3,);
    }
}
