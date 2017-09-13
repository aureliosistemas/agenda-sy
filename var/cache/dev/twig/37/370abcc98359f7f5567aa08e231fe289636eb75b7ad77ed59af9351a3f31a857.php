<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ffc540076ad108b276181233f3963c17097e3086f8b116dad433a6818a56c8f1 extends Twig_Template
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
        $__internal_235c22a0b48e8fa79424c7dfaf62ef406bd886e29a90034829b97a2e4a634e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235c22a0b48e8fa79424c7dfaf62ef406bd886e29a90034829b97a2e4a634e20->enter($__internal_235c22a0b48e8fa79424c7dfaf62ef406bd886e29a90034829b97a2e4a634e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d08a8e96ee3220cc123bdc72da51da6de5e8ff0bba996fd9dcd29aa7ebf570f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08a8e96ee3220cc123bdc72da51da6de5e8ff0bba996fd9dcd29aa7ebf570f6->enter($__internal_d08a8e96ee3220cc123bdc72da51da6de5e8ff0bba996fd9dcd29aa7ebf570f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_235c22a0b48e8fa79424c7dfaf62ef406bd886e29a90034829b97a2e4a634e20->leave($__internal_235c22a0b48e8fa79424c7dfaf62ef406bd886e29a90034829b97a2e4a634e20_prof);

        
        $__internal_d08a8e96ee3220cc123bdc72da51da6de5e8ff0bba996fd9dcd29aa7ebf570f6->leave($__internal_d08a8e96ee3220cc123bdc72da51da6de5e8ff0bba996fd9dcd29aa7ebf570f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
