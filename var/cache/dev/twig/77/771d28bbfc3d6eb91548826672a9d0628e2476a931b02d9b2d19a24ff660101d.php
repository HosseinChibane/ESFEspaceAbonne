<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4e45ec3581ae4645c1a35829c95ac9490ff4d77734490c2ba094e9e590d4f358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9fdd83f2d737b12e6b645a0cb7e590de8c7dfe36c27cac75f2000c09980d1bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fdd83f2d737b12e6b645a0cb7e590de8c7dfe36c27cac75f2000c09980d1bf7->enter($__internal_9fdd83f2d737b12e6b645a0cb7e590de8c7dfe36c27cac75f2000c09980d1bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_a5f9590ead2ed182b28eaa09e85421e0021d301745d405a7750dcdf53c087ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f9590ead2ed182b28eaa09e85421e0021d301745d405a7750dcdf53c087ef2->enter($__internal_a5f9590ead2ed182b28eaa09e85421e0021d301745d405a7750dcdf53c087ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fdd83f2d737b12e6b645a0cb7e590de8c7dfe36c27cac75f2000c09980d1bf7->leave($__internal_9fdd83f2d737b12e6b645a0cb7e590de8c7dfe36c27cac75f2000c09980d1bf7_prof);

        
        $__internal_a5f9590ead2ed182b28eaa09e85421e0021d301745d405a7750dcdf53c087ef2->leave($__internal_a5f9590ead2ed182b28eaa09e85421e0021d301745d405a7750dcdf53c087ef2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_588c9710b4816c25649aedc1826b2a48b6c48bef47cc13b0bedf0a35a0f50b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588c9710b4816c25649aedc1826b2a48b6c48bef47cc13b0bedf0a35a0f50b2d->enter($__internal_588c9710b4816c25649aedc1826b2a48b6c48bef47cc13b0bedf0a35a0f50b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_00dff667b0e1ee379d34fcdad659bd589f700fc88e88e9a5a224603b61400d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00dff667b0e1ee379d34fcdad659bd589f700fc88e88e9a5a224603b61400d51->enter($__internal_00dff667b0e1ee379d34fcdad659bd589f700fc88e88e9a5a224603b61400d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_00dff667b0e1ee379d34fcdad659bd589f700fc88e88e9a5a224603b61400d51->leave($__internal_00dff667b0e1ee379d34fcdad659bd589f700fc88e88e9a5a224603b61400d51_prof);

        
        $__internal_588c9710b4816c25649aedc1826b2a48b6c48bef47cc13b0bedf0a35a0f50b2d->leave($__internal_588c9710b4816c25649aedc1826b2a48b6c48bef47cc13b0bedf0a35a0f50b2d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
