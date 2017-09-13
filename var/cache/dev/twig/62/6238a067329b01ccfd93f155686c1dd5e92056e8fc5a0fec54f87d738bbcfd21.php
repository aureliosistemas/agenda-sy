<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f794bac01edc92477b475ede6c7c781008181ff6bbc724cf8c87ab652aee584c extends Twig_Template
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
        $__internal_6fd1fbf1e2c6e94f8df6b13a66aa268417073a5736c79a70968f2a60a74afc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd1fbf1e2c6e94f8df6b13a66aa268417073a5736c79a70968f2a60a74afc1b->enter($__internal_6fd1fbf1e2c6e94f8df6b13a66aa268417073a5736c79a70968f2a60a74afc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_bf0ff6baa69c6d313cae3355bf0bc90bc269a568104915f58dd8b5cb29bf51e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0ff6baa69c6d313cae3355bf0bc90bc269a568104915f58dd8b5cb29bf51e1->enter($__internal_bf0ff6baa69c6d313cae3355bf0bc90bc269a568104915f58dd8b5cb29bf51e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6fd1fbf1e2c6e94f8df6b13a66aa268417073a5736c79a70968f2a60a74afc1b->leave($__internal_6fd1fbf1e2c6e94f8df6b13a66aa268417073a5736c79a70968f2a60a74afc1b_prof);

        
        $__internal_bf0ff6baa69c6d313cae3355bf0bc90bc269a568104915f58dd8b5cb29bf51e1->leave($__internal_bf0ff6baa69c6d313cae3355bf0bc90bc269a568104915f58dd8b5cb29bf51e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
