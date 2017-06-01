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
        $__internal_c52136ee9254c4ff831a6ddac99d82686c1f130477baacdcaad88f6b14f7b885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52136ee9254c4ff831a6ddac99d82686c1f130477baacdcaad88f6b14f7b885->enter($__internal_c52136ee9254c4ff831a6ddac99d82686c1f130477baacdcaad88f6b14f7b885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_a51e614d96f7dd98e421857dcf1996a492f21edabf1ca7a8e6b2de146b54ef3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51e614d96f7dd98e421857dcf1996a492f21edabf1ca7a8e6b2de146b54ef3e->enter($__internal_a51e614d96f7dd98e421857dcf1996a492f21edabf1ca7a8e6b2de146b54ef3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_c52136ee9254c4ff831a6ddac99d82686c1f130477baacdcaad88f6b14f7b885->leave($__internal_c52136ee9254c4ff831a6ddac99d82686c1f130477baacdcaad88f6b14f7b885_prof);

        
        $__internal_a51e614d96f7dd98e421857dcf1996a492f21edabf1ca7a8e6b2de146b54ef3e->leave($__internal_a51e614d96f7dd98e421857dcf1996a492f21edabf1ca7a8e6b2de146b54ef3e_prof);

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
