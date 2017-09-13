<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_34511abbf5bb8676f8ba8b0b98e2fa3507e90d4c46868d8967d90403c8bdfc0e extends Twig_Template
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
        $__internal_8f363717a2660679e8330a10e7857a95f7c1def8b572d35690fe8f826ce46734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f363717a2660679e8330a10e7857a95f7c1def8b572d35690fe8f826ce46734->enter($__internal_8f363717a2660679e8330a10e7857a95f7c1def8b572d35690fe8f826ce46734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0bc75b525da74caeb262d40979d30d036079f09c3d90aa6391a750b4b19de0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc75b525da74caeb262d40979d30d036079f09c3d90aa6391a750b4b19de0e3->enter($__internal_0bc75b525da74caeb262d40979d30d036079f09c3d90aa6391a750b4b19de0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8f363717a2660679e8330a10e7857a95f7c1def8b572d35690fe8f826ce46734->leave($__internal_8f363717a2660679e8330a10e7857a95f7c1def8b572d35690fe8f826ce46734_prof);

        
        $__internal_0bc75b525da74caeb262d40979d30d036079f09c3d90aa6391a750b4b19de0e3->leave($__internal_0bc75b525da74caeb262d40979d30d036079f09c3d90aa6391a750b4b19de0e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
