<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_12ceef6175538e89135020ff8cfbd7ecffadfea54fc0de7930b6cc798711c3a9 extends Twig_Template
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
        $__internal_2f9af09e67edc67a371db1684f8307259c71a4f9f3e6b47ecab46b3bde5601b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9af09e67edc67a371db1684f8307259c71a4f9f3e6b47ecab46b3bde5601b2->enter($__internal_2f9af09e67edc67a371db1684f8307259c71a4f9f3e6b47ecab46b3bde5601b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5832f439eeb7f2fa90da59d82ff3574875f3b08a707ca4d0f0b4da179a638452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5832f439eeb7f2fa90da59d82ff3574875f3b08a707ca4d0f0b4da179a638452->enter($__internal_5832f439eeb7f2fa90da59d82ff3574875f3b08a707ca4d0f0b4da179a638452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2f9af09e67edc67a371db1684f8307259c71a4f9f3e6b47ecab46b3bde5601b2->leave($__internal_2f9af09e67edc67a371db1684f8307259c71a4f9f3e6b47ecab46b3bde5601b2_prof);

        
        $__internal_5832f439eeb7f2fa90da59d82ff3574875f3b08a707ca4d0f0b4da179a638452->leave($__internal_5832f439eeb7f2fa90da59d82ff3574875f3b08a707ca4d0f0b4da179a638452_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
