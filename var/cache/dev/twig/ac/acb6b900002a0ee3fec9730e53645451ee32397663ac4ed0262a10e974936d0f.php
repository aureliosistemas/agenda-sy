<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_318816ca07eee82e6969e1299dd2c3bc57c76f2be658898ca129199b24b1f7a6 extends Twig_Template
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
        $__internal_700bc12f7b3a9a18bc0eb30d1e9c62617d1403bf6a39a55f531d56f32c61ff9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700bc12f7b3a9a18bc0eb30d1e9c62617d1403bf6a39a55f531d56f32c61ff9e->enter($__internal_700bc12f7b3a9a18bc0eb30d1e9c62617d1403bf6a39a55f531d56f32c61ff9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_fcb4f4993bcc37539ce3de30ac639e606e3bd58cb1bcc3086c29269823a37949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb4f4993bcc37539ce3de30ac639e606e3bd58cb1bcc3086c29269823a37949->enter($__internal_fcb4f4993bcc37539ce3de30ac639e606e3bd58cb1bcc3086c29269823a37949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_700bc12f7b3a9a18bc0eb30d1e9c62617d1403bf6a39a55f531d56f32c61ff9e->leave($__internal_700bc12f7b3a9a18bc0eb30d1e9c62617d1403bf6a39a55f531d56f32c61ff9e_prof);

        
        $__internal_fcb4f4993bcc37539ce3de30ac639e606e3bd58cb1bcc3086c29269823a37949->leave($__internal_fcb4f4993bcc37539ce3de30ac639e606e3bd58cb1bcc3086c29269823a37949_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
