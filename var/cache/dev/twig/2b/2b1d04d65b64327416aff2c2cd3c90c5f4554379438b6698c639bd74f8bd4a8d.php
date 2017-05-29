<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_07f33d8a7fef8dd925b472c1b7cb757e67e81f3ed40080e23c8f1afb74264aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e6d76a239dc1a4daf0b8d6b57e42ad74dffe5e887641ccb69d961ff3f5a2a78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d76a239dc1a4daf0b8d6b57e42ad74dffe5e887641ccb69d961ff3f5a2a78e->enter($__internal_e6d76a239dc1a4daf0b8d6b57e42ad74dffe5e887641ccb69d961ff3f5a2a78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_3f9d985a3400c6b8a7fd73ba8a0aa4f85f4784988266f50d80be8682349d3ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9d985a3400c6b8a7fd73ba8a0aa4f85f4784988266f50d80be8682349d3ed9->enter($__internal_3f9d985a3400c6b8a7fd73ba8a0aa4f85f4784988266f50d80be8682349d3ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6d76a239dc1a4daf0b8d6b57e42ad74dffe5e887641ccb69d961ff3f5a2a78e->leave($__internal_e6d76a239dc1a4daf0b8d6b57e42ad74dffe5e887641ccb69d961ff3f5a2a78e_prof);

        
        $__internal_3f9d985a3400c6b8a7fd73ba8a0aa4f85f4784988266f50d80be8682349d3ed9->leave($__internal_3f9d985a3400c6b8a7fd73ba8a0aa4f85f4784988266f50d80be8682349d3ed9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8e8db3b68370863323e55b0564dac0b9eb0fb06dd1091d198863c124f9cf5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e8db3b68370863323e55b0564dac0b9eb0fb06dd1091d198863c124f9cf5a1->enter($__internal_e8e8db3b68370863323e55b0564dac0b9eb0fb06dd1091d198863c124f9cf5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2979f69279eb91fba1c98890b95ffd73e96389a38e6484821d453dd1f9fc6618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2979f69279eb91fba1c98890b95ffd73e96389a38e6484821d453dd1f9fc6618->enter($__internal_2979f69279eb91fba1c98890b95ffd73e96389a38e6484821d453dd1f9fc6618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2979f69279eb91fba1c98890b95ffd73e96389a38e6484821d453dd1f9fc6618->leave($__internal_2979f69279eb91fba1c98890b95ffd73e96389a38e6484821d453dd1f9fc6618_prof);

        
        $__internal_e8e8db3b68370863323e55b0564dac0b9eb0fb06dd1091d198863c124f9cf5a1->leave($__internal_e8e8db3b68370863323e55b0564dac0b9eb0fb06dd1091d198863c124f9cf5a1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
