<?php

/* :public:extra.html.twig */
class __TwigTemplate_c3270b8e946928faeceb3e6b65df22c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"inner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <h3><span class=\"slash\">//</span> Quick Links</h3>
                <ul class=\"footer-links clearfix\">
                    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "site_map"));
        foreach ($context['_seq'] as $context["section"] => $context["pages"]) {
            // line 8
            echo "                        ";
            if ((twig_slice($this->env, $this->getContext($context, "section"), 0, 1) != "_")) {
                // line 9
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
                foreach ($context['_seq'] as $context["p"] => $context["permission"]) {
                    // line 10
                    echo "                                ";
                    if (((($this->getContext($context, "permission") == 0) || ($this->getContext($context, "auth_level") >= $this->getContext($context, "permission"))) && ($this->getContext($context, "p") == $this->getContext($context, "section")))) {
                        // line 11
                        echo "                                    <li>
                                        <a ";
                        // line 12
                        if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                            echo "class=\"active\"";
                        } else {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                            <i class=\"icon-";
                        // line 13
                        echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                        echo "\"></i> ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, "p")), "html", null, true);
                        echo "
                                        </a>
                                    </li>
                                ";
                    }
                    // line 17
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['p'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 18
                echo "                        ";
            }
            // line 19
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['pages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "                </ul> <!-- /footer-links -->
                <ul class=\"footer-links clearfix\">  
                    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "site_map"), "_misc"));
        foreach ($context['_seq'] as $context["p"] => $context["permission"]) {
            // line 23
            echo "                        ";
            if ((($this->getContext($context, "permission") == 0) || ($this->getContext($context, "auth_level") >= $this->getContext($context, "permission")))) {
                // line 24
                echo "                            <li>
                                <a ";
                // line 25
                if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                    echo "class=\"active\"";
                } else {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                    echo "\"";
                }
                echo ">
                                    <i class=\"icon-";
                // line 26
                echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, "p")), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 30
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['p'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "                </ul> <!-- /footer-links -->
            </div> <!-- /span4 -->
            <div class=\"span4\">
                <h3><span class=\"slash\">//</span> Follow us</h3>
                <p>You can now be part of the community by following us on Twitter, Facebook or Google+ for news, announcements and more.</p>
                <ul class=\"social-icons-container\">
                    <li><a href=\"#\" class=\"social-icon social-icon-twitter\">Twitter</a></li>
                    <li><a href=\"#\" class=\"social-icon social-icon-facebook\">Facebook</a></li>
                    <li><a href=\"#\" class=\"social-icon social-icon-googleplus\">Google+</a></li>
                </ul> <!-- /social-icons-container -->
            </div> <!-- /span4 -->
            <div class=\"span4\">
                <h3><span class=\"slash\">//</span> Subscribe</h3>
                <p>Subscribe to our newsletter and get exclusive promotions and beta invites straight to your inbox!</p>
                <br />
                <form action=\"/";
        // line 46
        echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
        echo "/subscription\" method=\"post\">
                    <input name=\"subscription_email\" type=\"text\" placeholder=\"Email...\" />
                    <br />
                    <button class=\"btn \">Subscribe</button>
                </form>
            </div> <!-- /span4 -->
        </div> <!-- /row -->
    </div> <!-- /container -->
</div> <!-- /inner -->";
    }

    public function getTemplateName()
    {
        return ":public:extra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  116 => 31,  110 => 30,  101 => 26,  91 => 25,  88 => 24,  85 => 23,  81 => 22,  68 => 18,  62 => 17,  53 => 13,  43 => 12,  40 => 11,  32 => 9,  25 => 7,  86 => 18,  80 => 17,  77 => 20,  71 => 19,  64 => 11,  60 => 10,  52 => 9,  37 => 10,  34 => 7,  29 => 8,  26 => 5,  22 => 4,  17 => 1,);
    }
}
