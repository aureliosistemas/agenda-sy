<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
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
        $__internal_f528e7150eb2bd8c01ad7efcea7973c4d8a6bdf5df6f141ac93554f972033c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f528e7150eb2bd8c01ad7efcea7973c4d8a6bdf5df6f141ac93554f972033c9f->enter($__internal_f528e7150eb2bd8c01ad7efcea7973c4d8a6bdf5df6f141ac93554f972033c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_197826b152f54a7530421bdb12ebfffc42575ba7bd84560cf4d37e1c3f0ca0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197826b152f54a7530421bdb12ebfffc42575ba7bd84560cf4d37e1c3f0ca0ba->enter($__internal_197826b152f54a7530421bdb12ebfffc42575ba7bd84560cf4d37e1c3f0ca0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f528e7150eb2bd8c01ad7efcea7973c4d8a6bdf5df6f141ac93554f972033c9f->leave($__internal_f528e7150eb2bd8c01ad7efcea7973c4d8a6bdf5df6f141ac93554f972033c9f_prof);

        
        $__internal_197826b152f54a7530421bdb12ebfffc42575ba7bd84560cf4d37e1c3f0ca0ba->leave($__internal_197826b152f54a7530421bdb12ebfffc42575ba7bd84560cf4d37e1c3f0ca0ba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bbbc3745916e8190ed3a7310ee317d54baa28bc4d5d6e845691a233c908224c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bbbc3745916e8190ed3a7310ee317d54baa28bc4d5d6e845691a233c908224c->enter($__internal_9bbbc3745916e8190ed3a7310ee317d54baa28bc4d5d6e845691a233c908224c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e42996cfc8c065e9dd7de6257ab6b2eb890262cb93d72ad54809f3bd85bf8f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42996cfc8c065e9dd7de6257ab6b2eb890262cb93d72ad54809f3bd85bf8f6b->enter($__internal_e42996cfc8c065e9dd7de6257ab6b2eb890262cb93d72ad54809f3bd85bf8f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e42996cfc8c065e9dd7de6257ab6b2eb890262cb93d72ad54809f3bd85bf8f6b->leave($__internal_e42996cfc8c065e9dd7de6257ab6b2eb890262cb93d72ad54809f3bd85bf8f6b_prof);

        
        $__internal_9bbbc3745916e8190ed3a7310ee317d54baa28bc4d5d6e845691a233c908224c->leave($__internal_9bbbc3745916e8190ed3a7310ee317d54baa28bc4d5d6e845691a233c908224c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_be47428701f5ed89f699215c6005c555c2720ee2ed60f224683d2775bac4faad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be47428701f5ed89f699215c6005c555c2720ee2ed60f224683d2775bac4faad->enter($__internal_be47428701f5ed89f699215c6005c555c2720ee2ed60f224683d2775bac4faad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6166adc10a905a51a884b1262f5f2a5c525a3ddbba23a2bdc2156ea0e8526b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6166adc10a905a51a884b1262f5f2a5c525a3ddbba23a2bdc2156ea0e8526b97->enter($__internal_6166adc10a905a51a884b1262f5f2a5c525a3ddbba23a2bdc2156ea0e8526b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6166adc10a905a51a884b1262f5f2a5c525a3ddbba23a2bdc2156ea0e8526b97->leave($__internal_6166adc10a905a51a884b1262f5f2a5c525a3ddbba23a2bdc2156ea0e8526b97_prof);

        
        $__internal_be47428701f5ed89f699215c6005c555c2720ee2ed60f224683d2775bac4faad->leave($__internal_be47428701f5ed89f699215c6005c555c2720ee2ed60f224683d2775bac4faad_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f09886571a7b12526d78167966c07d6269c8f20867197b02102dcd49b6e6e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f09886571a7b12526d78167966c07d6269c8f20867197b02102dcd49b6e6e46->enter($__internal_1f09886571a7b12526d78167966c07d6269c8f20867197b02102dcd49b6e6e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fc6f8d692af507d750fba47a02993482041a4118c5ab51349a2ffef14aef896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc6f8d692af507d750fba47a02993482041a4118c5ab51349a2ffef14aef896->enter($__internal_9fc6f8d692af507d750fba47a02993482041a4118c5ab51349a2ffef14aef896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9fc6f8d692af507d750fba47a02993482041a4118c5ab51349a2ffef14aef896->leave($__internal_9fc6f8d692af507d750fba47a02993482041a4118c5ab51349a2ffef14aef896_prof);

        
        $__internal_1f09886571a7b12526d78167966c07d6269c8f20867197b02102dcd49b6e6e46->leave($__internal_1f09886571a7b12526d78167966c07d6269c8f20867197b02102dcd49b6e6e46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
