<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82d788d4b72f663169ca0bb8b3c9237314f4ff2eafb4efbe6ea7b1cf19213fb3 extends Twig_Template
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
        $__internal_6d7dc58799dc7a69850fbbeffd5900a1dad4684f3e48dbbf9691daa1969e9be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7dc58799dc7a69850fbbeffd5900a1dad4684f3e48dbbf9691daa1969e9be2->enter($__internal_6d7dc58799dc7a69850fbbeffd5900a1dad4684f3e48dbbf9691daa1969e9be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e50106f3632d72caef20f1c6a3bed9d0a55c7cd881e4bf9f4901e1a2d733c68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50106f3632d72caef20f1c6a3bed9d0a55c7cd881e4bf9f4901e1a2d733c68c->enter($__internal_e50106f3632d72caef20f1c6a3bed9d0a55c7cd881e4bf9f4901e1a2d733c68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6d7dc58799dc7a69850fbbeffd5900a1dad4684f3e48dbbf9691daa1969e9be2->leave($__internal_6d7dc58799dc7a69850fbbeffd5900a1dad4684f3e48dbbf9691daa1969e9be2_prof);

        
        $__internal_e50106f3632d72caef20f1c6a3bed9d0a55c7cd881e4bf9f4901e1a2d733c68c->leave($__internal_e50106f3632d72caef20f1c6a3bed9d0a55c7cd881e4bf9f4901e1a2d733c68c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
