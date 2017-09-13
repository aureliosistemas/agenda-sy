<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a0fe85de2ce7e12397ff4f3653200f0f4e1be013b2e0ae3153b456626ccda2b0 extends Twig_Template
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
        $__internal_b550daa13652101b2dc517dd3c9e4c6f38e6b74762e506d9ab104baf82c058f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b550daa13652101b2dc517dd3c9e4c6f38e6b74762e506d9ab104baf82c058f9->enter($__internal_b550daa13652101b2dc517dd3c9e4c6f38e6b74762e506d9ab104baf82c058f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_951c7c8c1026903fbf4d04b48bb6fe6c1f2d40aef2416cfc478d49a239def478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951c7c8c1026903fbf4d04b48bb6fe6c1f2d40aef2416cfc478d49a239def478->enter($__internal_951c7c8c1026903fbf4d04b48bb6fe6c1f2d40aef2416cfc478d49a239def478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b550daa13652101b2dc517dd3c9e4c6f38e6b74762e506d9ab104baf82c058f9->leave($__internal_b550daa13652101b2dc517dd3c9e4c6f38e6b74762e506d9ab104baf82c058f9_prof);

        
        $__internal_951c7c8c1026903fbf4d04b48bb6fe6c1f2d40aef2416cfc478d49a239def478->leave($__internal_951c7c8c1026903fbf4d04b48bb6fe6c1f2d40aef2416cfc478d49a239def478_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
