<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_26ce063fe9be192b956753213ac612bba2e41dc305aa519593807e55e9632f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_216493c0d61230c1cf181c6eff7279f899cfdf63ed5a7b3f3c2f13fdf5ff6af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216493c0d61230c1cf181c6eff7279f899cfdf63ed5a7b3f3c2f13fdf5ff6af5->enter($__internal_216493c0d61230c1cf181c6eff7279f899cfdf63ed5a7b3f3c2f13fdf5ff6af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_29c0b7eec0bb77f0a8973af50d795e1d4a3c52457c2982a4d5dcc1d39f2c177c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c0b7eec0bb77f0a8973af50d795e1d4a3c52457c2982a4d5dcc1d39f2c177c->enter($__internal_29c0b7eec0bb77f0a8973af50d795e1d4a3c52457c2982a4d5dcc1d39f2c177c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_216493c0d61230c1cf181c6eff7279f899cfdf63ed5a7b3f3c2f13fdf5ff6af5->leave($__internal_216493c0d61230c1cf181c6eff7279f899cfdf63ed5a7b3f3c2f13fdf5ff6af5_prof);

        
        $__internal_29c0b7eec0bb77f0a8973af50d795e1d4a3c52457c2982a4d5dcc1d39f2c177c->leave($__internal_29c0b7eec0bb77f0a8973af50d795e1d4a3c52457c2982a4d5dcc1d39f2c177c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a990b028d19ab2b3c517850148321d16055e6cc1e64be4d7fd8505be511fdbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a990b028d19ab2b3c517850148321d16055e6cc1e64be4d7fd8505be511fdbbc->enter($__internal_a990b028d19ab2b3c517850148321d16055e6cc1e64be4d7fd8505be511fdbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4554160d494d8b182ca0324fbfd1d9bcc5d0d10e00d5f56192668db8dbd0bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4554160d494d8b182ca0324fbfd1d9bcc5d0d10e00d5f56192668db8dbd0bef->enter($__internal_f4554160d494d8b182ca0324fbfd1d9bcc5d0d10e00d5f56192668db8dbd0bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f4554160d494d8b182ca0324fbfd1d9bcc5d0d10e00d5f56192668db8dbd0bef->leave($__internal_f4554160d494d8b182ca0324fbfd1d9bcc5d0d10e00d5f56192668db8dbd0bef_prof);

        
        $__internal_a990b028d19ab2b3c517850148321d16055e6cc1e64be4d7fd8505be511fdbbc->leave($__internal_a990b028d19ab2b3c517850148321d16055e6cc1e64be4d7fd8505be511fdbbc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2fd90756e687716335ea4acdefe8d4e07f7cdee40854307310f704a06c849d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd90756e687716335ea4acdefe8d4e07f7cdee40854307310f704a06c849d8f->enter($__internal_2fd90756e687716335ea4acdefe8d4e07f7cdee40854307310f704a06c849d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fbe0f0e6a688963b1bf3cceaa54655f654e4b3f4894949d96c65ba718086ed4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe0f0e6a688963b1bf3cceaa54655f654e4b3f4894949d96c65ba718086ed4b->enter($__internal_fbe0f0e6a688963b1bf3cceaa54655f654e4b3f4894949d96c65ba718086ed4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fbe0f0e6a688963b1bf3cceaa54655f654e4b3f4894949d96c65ba718086ed4b->leave($__internal_fbe0f0e6a688963b1bf3cceaa54655f654e4b3f4894949d96c65ba718086ed4b_prof);

        
        $__internal_2fd90756e687716335ea4acdefe8d4e07f7cdee40854307310f704a06c849d8f->leave($__internal_2fd90756e687716335ea4acdefe8d4e07f7cdee40854307310f704a06c849d8f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_439a134d84c0faa02387e31e8a335d801073e265b7e772c9e3afab4e93456530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439a134d84c0faa02387e31e8a335d801073e265b7e772c9e3afab4e93456530->enter($__internal_439a134d84c0faa02387e31e8a335d801073e265b7e772c9e3afab4e93456530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4cd27c4816ff34b4da309a82c1654bac6d641414c9a5f553c37f5717e8e1d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cd27c4816ff34b4da309a82c1654bac6d641414c9a5f553c37f5717e8e1d44->enter($__internal_f4cd27c4816ff34b4da309a82c1654bac6d641414c9a5f553c37f5717e8e1d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4cd27c4816ff34b4da309a82c1654bac6d641414c9a5f553c37f5717e8e1d44->leave($__internal_f4cd27c4816ff34b4da309a82c1654bac6d641414c9a5f553c37f5717e8e1d44_prof);

        
        $__internal_439a134d84c0faa02387e31e8a335d801073e265b7e772c9e3afab4e93456530->leave($__internal_439a134d84c0faa02387e31e8a335d801073e265b7e772c9e3afab4e93456530_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
