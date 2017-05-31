<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_cf60d764c4c7711d5aba259d42107810277ba27384cc8444d0d533ec9e5313ed extends Twig_Template
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
        $__internal_93132edeae2deaa075b62e9646465ff983a70f0b6a851e52f1ad2a70167afc08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93132edeae2deaa075b62e9646465ff983a70f0b6a851e52f1ad2a70167afc08->enter($__internal_93132edeae2deaa075b62e9646465ff983a70f0b6a851e52f1ad2a70167afc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_deb06d63c30c24b3063c64cb37898fcaf496baf8ed4eccecf9c5ce3bf02b8b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb06d63c30c24b3063c64cb37898fcaf496baf8ed4eccecf9c5ce3bf02b8b0b->enter($__internal_deb06d63c30c24b3063c64cb37898fcaf496baf8ed4eccecf9c5ce3bf02b8b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_93132edeae2deaa075b62e9646465ff983a70f0b6a851e52f1ad2a70167afc08->leave($__internal_93132edeae2deaa075b62e9646465ff983a70f0b6a851e52f1ad2a70167afc08_prof);

        
        $__internal_deb06d63c30c24b3063c64cb37898fcaf496baf8ed4eccecf9c5ce3bf02b8b0b->leave($__internal_deb06d63c30c24b3063c64cb37898fcaf496baf8ed4eccecf9c5ce3bf02b8b0b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\list_content.html.twig");
    }
}
