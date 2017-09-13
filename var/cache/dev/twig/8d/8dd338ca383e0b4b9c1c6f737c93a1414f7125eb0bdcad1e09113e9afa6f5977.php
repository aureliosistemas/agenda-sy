<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_40e6854ef7dcd4193fa676e5c642ea304680c9250d91e61f11cc10d57283ccf0 extends Twig_Template
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
        $__internal_0cada0987b3e0609bbc18cd1b3f3d5b3d73a5c53a19bd6dd3dd774a1509dd35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cada0987b3e0609bbc18cd1b3f3d5b3d73a5c53a19bd6dd3dd774a1509dd35d->enter($__internal_0cada0987b3e0609bbc18cd1b3f3d5b3d73a5c53a19bd6dd3dd774a1509dd35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d7dd1593a79421f193cdb35652f94d64f770b0f93b4f5881dae5022778721673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dd1593a79421f193cdb35652f94d64f770b0f93b4f5881dae5022778721673->enter($__internal_d7dd1593a79421f193cdb35652f94d64f770b0f93b4f5881dae5022778721673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0cada0987b3e0609bbc18cd1b3f3d5b3d73a5c53a19bd6dd3dd774a1509dd35d->leave($__internal_0cada0987b3e0609bbc18cd1b3f3d5b3d73a5c53a19bd6dd3dd774a1509dd35d_prof);

        
        $__internal_d7dd1593a79421f193cdb35652f94d64f770b0f93b4f5881dae5022778721673->leave($__internal_d7dd1593a79421f193cdb35652f94d64f770b0f93b4f5881dae5022778721673_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
