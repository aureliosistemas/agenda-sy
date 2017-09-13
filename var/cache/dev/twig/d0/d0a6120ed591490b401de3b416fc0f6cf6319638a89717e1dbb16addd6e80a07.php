<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_38a17e55abeb754a46cfb2c3d136d1a878c5a8271d53dacbf4b7a137bdf499d9 extends Twig_Template
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
        $__internal_278b353b97c3856d329f5d146d2730647332dc2ffa04027f09c17a5d79c8f907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278b353b97c3856d329f5d146d2730647332dc2ffa04027f09c17a5d79c8f907->enter($__internal_278b353b97c3856d329f5d146d2730647332dc2ffa04027f09c17a5d79c8f907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d78a62d305b2e599216e1897f8829f9a5397152b5b2f43f9c90f55db07f03b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78a62d305b2e599216e1897f8829f9a5397152b5b2f43f9c90f55db07f03b74->enter($__internal_d78a62d305b2e599216e1897f8829f9a5397152b5b2f43f9c90f55db07f03b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_278b353b97c3856d329f5d146d2730647332dc2ffa04027f09c17a5d79c8f907->leave($__internal_278b353b97c3856d329f5d146d2730647332dc2ffa04027f09c17a5d79c8f907_prof);

        
        $__internal_d78a62d305b2e599216e1897f8829f9a5397152b5b2f43f9c90f55db07f03b74->leave($__internal_d78a62d305b2e599216e1897f8829f9a5397152b5b2f43f9c90f55db07f03b74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
