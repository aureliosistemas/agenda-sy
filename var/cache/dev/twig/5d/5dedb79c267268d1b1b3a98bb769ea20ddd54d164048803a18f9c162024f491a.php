<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_a63a8a9527c351e8b88ca7a3d2094206d2ad0f9ae68b1ea8ae4ae0eb62b045df extends Twig_Template
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
        $__internal_be9a086d72ba49524b7cb92b094f92b0903bea42f2fd46e123184664e3f47dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9a086d72ba49524b7cb92b094f92b0903bea42f2fd46e123184664e3f47dcc->enter($__internal_be9a086d72ba49524b7cb92b094f92b0903bea42f2fd46e123184664e3f47dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_c37daac5ab901af0b80706b2b0df5f81e36e0488ebb86833cc77044c70f9debd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37daac5ab901af0b80706b2b0df5f81e36e0488ebb86833cc77044c70f9debd->enter($__internal_c37daac5ab901af0b80706b2b0df5f81e36e0488ebb86833cc77044c70f9debd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_be9a086d72ba49524b7cb92b094f92b0903bea42f2fd46e123184664e3f47dcc->leave($__internal_be9a086d72ba49524b7cb92b094f92b0903bea42f2fd46e123184664e3f47dcc_prof);

        
        $__internal_c37daac5ab901af0b80706b2b0df5f81e36e0488ebb86833cc77044c70f9debd->leave($__internal_c37daac5ab901af0b80706b2b0df5f81e36e0488ebb86833cc77044c70f9debd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
