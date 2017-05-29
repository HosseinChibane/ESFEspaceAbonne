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
        $__internal_b1f7ad94628e6589289ac855bcd1a2e6d90a405329bd21e21a07d2577b571fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f7ad94628e6589289ac855bcd1a2e6d90a405329bd21e21a07d2577b571fbb->enter($__internal_b1f7ad94628e6589289ac855bcd1a2e6d90a405329bd21e21a07d2577b571fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_f854099b0eb6c737c7cb2afb65c0b33a5a9bfac5e785bbb5f96baa70b210c9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f854099b0eb6c737c7cb2afb65c0b33a5a9bfac5e785bbb5f96baa70b210c9c5->enter($__internal_f854099b0eb6c737c7cb2afb65c0b33a5a9bfac5e785bbb5f96baa70b210c9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_b1f7ad94628e6589289ac855bcd1a2e6d90a405329bd21e21a07d2577b571fbb->leave($__internal_b1f7ad94628e6589289ac855bcd1a2e6d90a405329bd21e21a07d2577b571fbb_prof);

        
        $__internal_f854099b0eb6c737c7cb2afb65c0b33a5a9bfac5e785bbb5f96baa70b210c9c5->leave($__internal_f854099b0eb6c737c7cb2afb65c0b33a5a9bfac5e785bbb5f96baa70b210c9c5_prof);

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
