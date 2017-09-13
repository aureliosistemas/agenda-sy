<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5050281a025901ccf12f747f91bee6db886e2642bbb06bb5fdcc7fc7bd22c63f extends Twig_Template
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
        $__internal_db63e6a7bb563852b7254030100e2574017917fd05e6eca5aba7155e1e93b5c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db63e6a7bb563852b7254030100e2574017917fd05e6eca5aba7155e1e93b5c5->enter($__internal_db63e6a7bb563852b7254030100e2574017917fd05e6eca5aba7155e1e93b5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_eb900c4e492a9a4908f48aae81427486e4a1be155657e0dcc6c6eb14db3916a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb900c4e492a9a4908f48aae81427486e4a1be155657e0dcc6c6eb14db3916a4->enter($__internal_eb900c4e492a9a4908f48aae81427486e4a1be155657e0dcc6c6eb14db3916a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_db63e6a7bb563852b7254030100e2574017917fd05e6eca5aba7155e1e93b5c5->leave($__internal_db63e6a7bb563852b7254030100e2574017917fd05e6eca5aba7155e1e93b5c5_prof);

        
        $__internal_eb900c4e492a9a4908f48aae81427486e4a1be155657e0dcc6c6eb14db3916a4->leave($__internal_eb900c4e492a9a4908f48aae81427486e4a1be155657e0dcc6c6eb14db3916a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
