<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_5ab903d2ed46b8e66e0508e580195b650add5419b40af9a721f11e26e6ff19d3 extends Twig_Template
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
        $__internal_2b413e84fcf0c1c8b8057a6eb7326bfa6783a58f87554bbf9952ad7b1c8a8579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b413e84fcf0c1c8b8057a6eb7326bfa6783a58f87554bbf9952ad7b1c8a8579->enter($__internal_2b413e84fcf0c1c8b8057a6eb7326bfa6783a58f87554bbf9952ad7b1c8a8579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_76ccfe809b7d11c0c8999fb73ffd7becbc8d703303c54b54464b10005b7c624a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ccfe809b7d11c0c8999fb73ffd7becbc8d703303c54b54464b10005b7c624a->enter($__internal_76ccfe809b7d11c0c8999fb73ffd7becbc8d703303c54b54464b10005b7c624a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2b413e84fcf0c1c8b8057a6eb7326bfa6783a58f87554bbf9952ad7b1c8a8579->leave($__internal_2b413e84fcf0c1c8b8057a6eb7326bfa6783a58f87554bbf9952ad7b1c8a8579_prof);

        
        $__internal_76ccfe809b7d11c0c8999fb73ffd7becbc8d703303c54b54464b10005b7c624a->leave($__internal_76ccfe809b7d11c0c8999fb73ffd7becbc8d703303c54b54464b10005b7c624a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
