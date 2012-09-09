<?php

/* FrameUser:modal:registration.html.twig */
class __TwigTemplate_c55a079475c1693d10a0f02dbb41747b extends Twig_Template
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
        return "FrameUser:modal:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 62,  100 => 36,  85 => 27,  76 => 23,  61 => 14,  173 => 54,  170 => 53,  167 => 52,  155 => 33,  149 => 31,  143 => 64,  140 => 28,  118 => 12,  105 => 8,  36 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 32,  148 => 57,  145 => 56,  141 => 63,  134 => 26,  132 => 60,  127 => 46,  123 => 44,  109 => 39,  93 => 31,  90 => 52,  54 => 14,  133 => 44,  124 => 41,  111 => 10,  80 => 47,  60 => 23,  52 => 10,  97 => 4,  95 => 21,  88 => 29,  78 => 46,  71 => 14,  72 => 16,  64 => 15,  53 => 11,  42 => 7,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 38,  158 => 34,  156 => 60,  153 => 59,  146 => 30,  142 => 54,  137 => 27,  126 => 58,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 4,  40 => 6,  26 => 2,  22 => 3,  25 => 4,  23 => 1,  92 => 55,  86 => 50,  79 => 24,  29 => 4,  24 => 3,  19 => 2,  17 => 1,  69 => 39,  63 => 18,  58 => 13,  49 => 9,  43 => 14,  37 => 8,  20 => 2,  139 => 26,  131 => 25,  128 => 24,  125 => 23,  121 => 13,  115 => 11,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 22,  50 => 13,  46 => 8,  44 => 11,  39 => 8,  33 => 5,  30 => 3,  27 => 3,  135 => 50,  129 => 59,  122 => 46,  116 => 42,  113 => 40,  108 => 9,  104 => 24,  102 => 37,  94 => 33,  89 => 29,  87 => 32,  84 => 49,  81 => 25,  73 => 22,  70 => 26,  67 => 38,  62 => 35,  59 => 23,  55 => 21,  51 => 19,  48 => 10,  41 => 8,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
