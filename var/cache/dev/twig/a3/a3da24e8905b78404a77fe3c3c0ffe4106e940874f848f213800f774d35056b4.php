<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccc3b4b992b79dd7fb22ff47616f23380accbcc6ed93d6dfd23ef4d156cc75bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc3b4b992b79dd7fb22ff47616f23380accbcc6ed93d6dfd23ef4d156cc75bf->enter($__internal_ccc3b4b992b79dd7fb22ff47616f23380accbcc6ed93d6dfd23ef4d156cc75bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7d948e420f68397940871bcc8b4dd620d6db4b55ec97fa38a97bc036491fecd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d948e420f68397940871bcc8b4dd620d6db4b55ec97fa38a97bc036491fecd5->enter($__internal_7d948e420f68397940871bcc8b4dd620d6db4b55ec97fa38a97bc036491fecd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-ui/jquery-ui.css"), "html", null, true);
        echo "\">


        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-ui/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-ui/i18n/datepicker-pt-BR.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div class=\"container-fluid\">
            <nav id=\"main-menu\">
                <div class=\"btn-group\" role=\"group\">
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_index");
        echo "\" class=\"btn btn-dark\">Reuniões</a>
                </div>
            </nav>
            <div class=\"row\">
                    <ol class=\"breadcrumb\">
                     
                    </ol>
                <div class=\"col-md-12\">
                    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "                </div>
            </div>
        </div>
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "        <script>
        (function(\$){
            // configure the bootstrap datepicker
        \$.datepicker.regional[ 'pt-BR' ];
            \$('.js-datepicker').datepicker({
                showAnim: 'clip',
                format: 'dd-mm-yyyy'
            });
            \$( \"#datepicker\" ).datepicker( \"option\",  \$.datepicker.regional[ 'pt-BR' ]);
    
        })(jQuery);
        
</script>
    </body>
</html>
";
        
        $__internal_ccc3b4b992b79dd7fb22ff47616f23380accbcc6ed93d6dfd23ef4d156cc75bf->leave($__internal_ccc3b4b992b79dd7fb22ff47616f23380accbcc6ed93d6dfd23ef4d156cc75bf_prof);

        
        $__internal_7d948e420f68397940871bcc8b4dd620d6db4b55ec97fa38a97bc036491fecd5->leave($__internal_7d948e420f68397940871bcc8b4dd620d6db4b55ec97fa38a97bc036491fecd5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d94449386f74c9f658a97e98336e964c62418adf4feadf37b84305e0ade2d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d94449386f74c9f658a97e98336e964c62418adf4feadf37b84305e0ade2d44->enter($__internal_7d94449386f74c9f658a97e98336e964c62418adf4feadf37b84305e0ade2d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dec9613c362199be3e463835ad096fc42581b6ebe3cdff6fe6fba3730e3ff9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec9613c362199be3e463835ad096fc42581b6ebe3cdff6fe6fba3730e3ff9db->enter($__internal_dec9613c362199be3e463835ad096fc42581b6ebe3cdff6fe6fba3730e3ff9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Aurelio";
        
        $__internal_dec9613c362199be3e463835ad096fc42581b6ebe3cdff6fe6fba3730e3ff9db->leave($__internal_dec9613c362199be3e463835ad096fc42581b6ebe3cdff6fe6fba3730e3ff9db_prof);

        
        $__internal_7d94449386f74c9f658a97e98336e964c62418adf4feadf37b84305e0ade2d44->leave($__internal_7d94449386f74c9f658a97e98336e964c62418adf4feadf37b84305e0ade2d44_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_beb3b736db36bce097cb7d72f38626e271101671bfa2577548e3d80ace9863da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb3b736db36bce097cb7d72f38626e271101671bfa2577548e3d80ace9863da->enter($__internal_beb3b736db36bce097cb7d72f38626e271101671bfa2577548e3d80ace9863da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_38c780854ab9e9748530a6e30bcc1e9965a130b82c30be715c0748fbde5e63d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c780854ab9e9748530a6e30bcc1e9965a130b82c30be715c0748fbde5e63d2->enter($__internal_38c780854ab9e9748530a6e30bcc1e9965a130b82c30be715c0748fbde5e63d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_38c780854ab9e9748530a6e30bcc1e9965a130b82c30be715c0748fbde5e63d2->leave($__internal_38c780854ab9e9748530a6e30bcc1e9965a130b82c30be715c0748fbde5e63d2_prof);

        
        $__internal_beb3b736db36bce097cb7d72f38626e271101671bfa2577548e3d80ace9863da->leave($__internal_beb3b736db36bce097cb7d72f38626e271101671bfa2577548e3d80ace9863da_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_18d805b8a9c3b3e0926ac97c428bbc129013e2a93f816aa1c1d2114f65a65238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d805b8a9c3b3e0926ac97c428bbc129013e2a93f816aa1c1d2114f65a65238->enter($__internal_18d805b8a9c3b3e0926ac97c428bbc129013e2a93f816aa1c1d2114f65a65238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c06a1fce734182a3a5404b921380f61c2354e2e2281bd408693961fbdabd2b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06a1fce734182a3a5404b921380f61c2354e2e2281bd408693961fbdabd2b54->enter($__internal_c06a1fce734182a3a5404b921380f61c2354e2e2281bd408693961fbdabd2b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c06a1fce734182a3a5404b921380f61c2354e2e2281bd408693961fbdabd2b54->leave($__internal_c06a1fce734182a3a5404b921380f61c2354e2e2281bd408693961fbdabd2b54_prof);

        
        $__internal_18d805b8a9c3b3e0926ac97c428bbc129013e2a93f816aa1c1d2114f65a65238->leave($__internal_18d805b8a9c3b3e0926ac97c428bbc129013e2a93f816aa1c1d2114f65a65238_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb928ec9edbe392057c6820c8e91ddf3832f89075e0265fb90bd0a5e724d3ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb928ec9edbe392057c6820c8e91ddf3832f89075e0265fb90bd0a5e724d3ba3->enter($__internal_bb928ec9edbe392057c6820c8e91ddf3832f89075e0265fb90bd0a5e724d3ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d9dcaeb1f99449bb23be6063d3db63148407057933aa72c735ea6c2c6e5cf81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dcaeb1f99449bb23be6063d3db63148407057933aa72c735ea6c2c6e5cf81d->enter($__internal_d9dcaeb1f99449bb23be6063d3db63148407057933aa72c735ea6c2c6e5cf81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d9dcaeb1f99449bb23be6063d3db63148407057933aa72c735ea6c2c6e5cf81d->leave($__internal_d9dcaeb1f99449bb23be6063d3db63148407057933aa72c735ea6c2c6e5cf81d_prof);

        
        $__internal_bb928ec9edbe392057c6820c8e91ddf3832f89075e0265fb90bd0a5e724d3ba3->leave($__internal_bb928ec9edbe392057c6820c8e91ddf3832f89075e0265fb90bd0a5e724d3ba3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 35,  165 => 31,  148 => 6,  130 => 5,  105 => 36,  103 => 35,  98 => 32,  96 => 31,  85 => 23,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Aurelio{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-theme.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('jquery-ui/jquery-ui.css') }}\">


        <script src=\"{{ asset('js/jquery-3.2.1.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('jquery-ui/jquery-ui.js') }}\"></script>
        <script src=\"{{ asset('jquery-ui/i18n/datepicker-pt-BR.js') }}\"></script>
    </head>
    <body>
        <div class=\"container-fluid\">
            <nav id=\"main-menu\">
                <div class=\"btn-group\" role=\"group\">
                    <a href=\"{{ path('reuniao_index') }}\" class=\"btn btn-dark\">Reuniões</a>
                </div>
            </nav>
            <div class=\"row\">
                    <ol class=\"breadcrumb\">
                     
                    </ol>
                <div class=\"col-md-12\">
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>
        {% block javascripts %}{% endblock %}
        <script>
        (function(\$){
            // configure the bootstrap datepicker
        \$.datepicker.regional[ 'pt-BR' ];
            \$('.js-datepicker').datepicker({
                showAnim: 'clip',
                format: 'dd-mm-yyyy'
            });
            \$( \"#datepicker\" ).datepicker( \"option\",  \$.datepicker.regional[ 'pt-BR' ]);
    
        })(jQuery);
        
</script>
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\base.html.twig");
    }
}
