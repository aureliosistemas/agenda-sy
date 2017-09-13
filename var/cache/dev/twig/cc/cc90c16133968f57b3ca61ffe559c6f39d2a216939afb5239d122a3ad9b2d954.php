<?php

/* reuniaopessoa/new.html.twig */
class __TwigTemplate_06d71b3865362f7b83fc7a652b456110edf0afe9a203d118ee77226368ca606b extends Twig_Template
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
        $__internal_d920ce7a3a06f6957ce95d2cf25efcfedcb53abd6f19a2af54b06dda9ae6503b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d920ce7a3a06f6957ce95d2cf25efcfedcb53abd6f19a2af54b06dda9ae6503b->enter($__internal_d920ce7a3a06f6957ce95d2cf25efcfedcb53abd6f19a2af54b06dda9ae6503b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaopessoa/new.html.twig"));

        $__internal_56914cfbe4536b0aeaef9390583604c66171455f1816627e83c8b4130e5d7a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56914cfbe4536b0aeaef9390583604c66171455f1816627e83c8b4130e5d7a90->enter($__internal_56914cfbe4536b0aeaef9390583604c66171455f1816627e83c8b4130e5d7a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaopessoa/new.html.twig"));

        // line 1
        echo "<tr>
\t<td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pessoa"] ?? $this->getContext($context, "pessoa")), "nome", array()), "html", null, true);
        echo "</td>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? $this->getContext($context, "datas")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 4
            echo "    <td>
    \t<input 
    \t\ttype=\"checkbox\" 
    \t\tonclick=\"\$().reuniaoAddPessoaDia(";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "id", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo ");\" 
    \t\tname=\"dia[]\" 
    \t\tdata-pessoa='";
            // line 9
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "' 
    \t\t";
            // line 10
            if (twig_in_filter($this->getAttribute($context["data"], "id", array()), $this->getAttribute(($context["pessoa"] ?? $this->getContext($context, "pessoa")), "dias", array()))) {
                // line 11
                echo "    \t\t\tchecked=\"checked\" 
    \t\t";
            }
            // line 13
            echo "    \t\tvalue=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" />
    </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</tr>
";
        
        $__internal_d920ce7a3a06f6957ce95d2cf25efcfedcb53abd6f19a2af54b06dda9ae6503b->leave($__internal_d920ce7a3a06f6957ce95d2cf25efcfedcb53abd6f19a2af54b06dda9ae6503b_prof);

        
        $__internal_56914cfbe4536b0aeaef9390583604c66171455f1816627e83c8b4130e5d7a90->leave($__internal_56914cfbe4536b0aeaef9390583604c66171455f1816627e83c8b4130e5d7a90_prof);

    }

    public function getTemplateName()
    {
        return "reuniaopessoa/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  58 => 13,  54 => 11,  52 => 10,  48 => 9,  41 => 7,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
\t<td>{{ pessoa.nome }}</td>
    {% for data in datas %}
    <td>
    \t<input 
    \t\ttype=\"checkbox\" 
    \t\tonclick=\"\$().reuniaoAddPessoaDia({{ reuniao.id }}, {{ id }});\" 
    \t\tname=\"dia[]\" 
    \t\tdata-pessoa='{{ id }}' 
    \t\t{% if data.id in pessoa.dias %}
    \t\t\tchecked=\"checked\" 
    \t\t{% endif %}
    \t\tvalue=\"{{ data.id }}\" />
    </td>
    {% endfor %}
</tr>
", "reuniaopessoa/new.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniaopessoa\\new.html.twig");
    }
}
