<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_13de81183da066dc368cf3267e2167e39fcf2e25ab378bdfa7f424640a67c171 extends Twig_Template
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
        $__internal_2a03eb3d531d4b9d054ff34b303c64c41ec177db00e7c60a3536e98903bf718a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a03eb3d531d4b9d054ff34b303c64c41ec177db00e7c60a3536e98903bf718a->enter($__internal_2a03eb3d531d4b9d054ff34b303c64c41ec177db00e7c60a3536e98903bf718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_c6cf0246def2a6e9a5cfd41a97fa230b20bc6ad76933842a5a44756d2057b56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6cf0246def2a6e9a5cfd41a97fa230b20bc6ad76933842a5a44756d2057b56a->enter($__internal_c6cf0246def2a6e9a5cfd41a97fa230b20bc6ad76933842a5a44756d2057b56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_2a03eb3d531d4b9d054ff34b303c64c41ec177db00e7c60a3536e98903bf718a->leave($__internal_2a03eb3d531d4b9d054ff34b303c64c41ec177db00e7c60a3536e98903bf718a_prof);

        
        $__internal_c6cf0246def2a6e9a5cfd41a97fa230b20bc6ad76933842a5a44756d2057b56a->leave($__internal_c6cf0246def2a6e9a5cfd41a97fa230b20bc6ad76933842a5a44756d2057b56a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
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
", "FOSUserBundle:Group:list_content.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
