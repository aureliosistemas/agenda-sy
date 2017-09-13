<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_018a74265dafed84df1e4c8cbdb2309779e71d80b055a85859bf080568e3c50c extends Twig_Template
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
        $__internal_1c5caf32dea51077b27cf0e680821b8f3b32e922ffde308d20a134d8e36ec8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5caf32dea51077b27cf0e680821b8f3b32e922ffde308d20a134d8e36ec8d3->enter($__internal_1c5caf32dea51077b27cf0e680821b8f3b32e922ffde308d20a134d8e36ec8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_67cb488f66053fc5e4a226c3502b0a5e6d1668bc17334f07238a97f83510421e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cb488f66053fc5e4a226c3502b0a5e6d1668bc17334f07238a97f83510421e->enter($__internal_67cb488f66053fc5e4a226c3502b0a5e6d1668bc17334f07238a97f83510421e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1c5caf32dea51077b27cf0e680821b8f3b32e922ffde308d20a134d8e36ec8d3->leave($__internal_1c5caf32dea51077b27cf0e680821b8f3b32e922ffde308d20a134d8e36ec8d3_prof);

        
        $__internal_67cb488f66053fc5e4a226c3502b0a5e6d1668bc17334f07238a97f83510421e->leave($__internal_67cb488f66053fc5e4a226c3502b0a5e6d1668bc17334f07238a97f83510421e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
