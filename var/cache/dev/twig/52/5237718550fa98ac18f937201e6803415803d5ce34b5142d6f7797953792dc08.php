<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f6da1f17503f86f8124889f7e2e8e79dc11502ed16f82a17449664dbbf3bb37a extends Twig_Template
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
        $__internal_dfe8c147e94b3c4cdc6ab0cef9ffe025b1f0b95bf4cec49decc0678d4d967fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe8c147e94b3c4cdc6ab0cef9ffe025b1f0b95bf4cec49decc0678d4d967fb7->enter($__internal_dfe8c147e94b3c4cdc6ab0cef9ffe025b1f0b95bf4cec49decc0678d4d967fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_568807457bda5469d8c7ef2ec9cd0d5bc8abd121e811ec1f40be4662a2b53129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568807457bda5469d8c7ef2ec9cd0d5bc8abd121e811ec1f40be4662a2b53129->enter($__internal_568807457bda5469d8c7ef2ec9cd0d5bc8abd121e811ec1f40be4662a2b53129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_dfe8c147e94b3c4cdc6ab0cef9ffe025b1f0b95bf4cec49decc0678d4d967fb7->leave($__internal_dfe8c147e94b3c4cdc6ab0cef9ffe025b1f0b95bf4cec49decc0678d4d967fb7_prof);

        
        $__internal_568807457bda5469d8c7ef2ec9cd0d5bc8abd121e811ec1f40be4662a2b53129->leave($__internal_568807457bda5469d8c7ef2ec9cd0d5bc8abd121e811ec1f40be4662a2b53129_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
