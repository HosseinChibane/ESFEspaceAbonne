<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0371bd13a60bd8882bc96a0c40e3ea62a9eb96d8d1a59e3bd9f19257d4614bcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba66ed188fdb45d1986cc1646454c45b497104ae96e50bb268cc4f88d1a33c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba66ed188fdb45d1986cc1646454c45b497104ae96e50bb268cc4f88d1a33c83->enter($__internal_ba66ed188fdb45d1986cc1646454c45b497104ae96e50bb268cc4f88d1a33c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_5fa14ea8f0b4dcef77aa52306e7b4419b9bf7f87099c18107e7956d19d4cbe30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa14ea8f0b4dcef77aa52306e7b4419b9bf7f87099c18107e7956d19d4cbe30->enter($__internal_5fa14ea8f0b4dcef77aa52306e7b4419b9bf7f87099c18107e7956d19d4cbe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba66ed188fdb45d1986cc1646454c45b497104ae96e50bb268cc4f88d1a33c83->leave($__internal_ba66ed188fdb45d1986cc1646454c45b497104ae96e50bb268cc4f88d1a33c83_prof);

        
        $__internal_5fa14ea8f0b4dcef77aa52306e7b4419b9bf7f87099c18107e7956d19d4cbe30->leave($__internal_5fa14ea8f0b4dcef77aa52306e7b4419b9bf7f87099c18107e7956d19d4cbe30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07cf472c8d2d8bfc314d62139f961c53e63b1f54a7ccd015f5671af0176e0934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cf472c8d2d8bfc314d62139f961c53e63b1f54a7ccd015f5671af0176e0934->enter($__internal_07cf472c8d2d8bfc314d62139f961c53e63b1f54a7ccd015f5671af0176e0934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c250dbc96473e4dfe39abc5c8bcb75dc5a7d8b5fa0000374071b57bd3a3cf562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c250dbc96473e4dfe39abc5c8bcb75dc5a7d8b5fa0000374071b57bd3a3cf562->enter($__internal_c250dbc96473e4dfe39abc5c8bcb75dc5a7d8b5fa0000374071b57bd3a3cf562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c250dbc96473e4dfe39abc5c8bcb75dc5a7d8b5fa0000374071b57bd3a3cf562->leave($__internal_c250dbc96473e4dfe39abc5c8bcb75dc5a7d8b5fa0000374071b57bd3a3cf562_prof);

        
        $__internal_07cf472c8d2d8bfc314d62139f961c53e63b1f54a7ccd015f5671af0176e0934->leave($__internal_07cf472c8d2d8bfc314d62139f961c53e63b1f54a7ccd015f5671af0176e0934_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
