<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7b1d2c5b49c16962cad41052fea34be7b55498728da807bb8af97ae522d4da5d extends Twig_Template
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
        $__internal_c5f641424a26e1831bedb1390391024650cb0c9e4f8bbb648decaa1111615b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f641424a26e1831bedb1390391024650cb0c9e4f8bbb648decaa1111615b8e->enter($__internal_c5f641424a26e1831bedb1390391024650cb0c9e4f8bbb648decaa1111615b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_512fe9aa3018a9566f837f18d490326eb754b6bf5ac65e910b9642c8b606fbdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512fe9aa3018a9566f837f18d490326eb754b6bf5ac65e910b9642c8b606fbdd->enter($__internal_512fe9aa3018a9566f837f18d490326eb754b6bf5ac65e910b9642c8b606fbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c5f641424a26e1831bedb1390391024650cb0c9e4f8bbb648decaa1111615b8e->leave($__internal_c5f641424a26e1831bedb1390391024650cb0c9e4f8bbb648decaa1111615b8e_prof);

        
        $__internal_512fe9aa3018a9566f837f18d490326eb754b6bf5ac65e910b9642c8b606fbdd->leave($__internal_512fe9aa3018a9566f837f18d490326eb754b6bf5ac65e910b9642c8b606fbdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
