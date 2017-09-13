<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3d5e943cc8f8fed9d099f1bc78b4627410a2d022699f6b6f147ae1065ccb6f2f extends Twig_Template
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
        $__internal_8f17f573e93e3bfb2c088c2ab0c4b2c22843fa61919f5720ab7bd4f5d213614e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f17f573e93e3bfb2c088c2ab0c4b2c22843fa61919f5720ab7bd4f5d213614e->enter($__internal_8f17f573e93e3bfb2c088c2ab0c4b2c22843fa61919f5720ab7bd4f5d213614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0bd33e83343b1afd874fbb05199a8a0ab2434539324c22d6d10c5fe72638491d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd33e83343b1afd874fbb05199a8a0ab2434539324c22d6d10c5fe72638491d->enter($__internal_0bd33e83343b1afd874fbb05199a8a0ab2434539324c22d6d10c5fe72638491d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8f17f573e93e3bfb2c088c2ab0c4b2c22843fa61919f5720ab7bd4f5d213614e->leave($__internal_8f17f573e93e3bfb2c088c2ab0c4b2c22843fa61919f5720ab7bd4f5d213614e_prof);

        
        $__internal_0bd33e83343b1afd874fbb05199a8a0ab2434539324c22d6d10c5fe72638491d->leave($__internal_0bd33e83343b1afd874fbb05199a8a0ab2434539324c22d6d10c5fe72638491d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
