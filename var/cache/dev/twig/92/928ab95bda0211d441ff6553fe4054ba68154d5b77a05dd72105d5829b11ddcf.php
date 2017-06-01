<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5f840e16011cc759cc70b31de4cf65aed7cbe8b5d56852e3adbebc54020e7bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_60822f939a7e6259eba955815d21e677099eeb9886e91498cdd8ca0f34f9aeb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60822f939a7e6259eba955815d21e677099eeb9886e91498cdd8ca0f34f9aeb3->enter($__internal_60822f939a7e6259eba955815d21e677099eeb9886e91498cdd8ca0f34f9aeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_376c2f2c45cc66182780d8468a7c01732f5f6a6a224726e8f23e5a2e64973017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376c2f2c45cc66182780d8468a7c01732f5f6a6a224726e8f23e5a2e64973017->enter($__internal_376c2f2c45cc66182780d8468a7c01732f5f6a6a224726e8f23e5a2e64973017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60822f939a7e6259eba955815d21e677099eeb9886e91498cdd8ca0f34f9aeb3->leave($__internal_60822f939a7e6259eba955815d21e677099eeb9886e91498cdd8ca0f34f9aeb3_prof);

        
        $__internal_376c2f2c45cc66182780d8468a7c01732f5f6a6a224726e8f23e5a2e64973017->leave($__internal_376c2f2c45cc66182780d8468a7c01732f5f6a6a224726e8f23e5a2e64973017_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f87b0f3fa1c2aae81799c5d86cb290bb78aeac1df48c368acee09df143a5a79e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87b0f3fa1c2aae81799c5d86cb290bb78aeac1df48c368acee09df143a5a79e->enter($__internal_f87b0f3fa1c2aae81799c5d86cb290bb78aeac1df48c368acee09df143a5a79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba83f94af6bdba81e40e2eb5634e5a1ad11ef35dab2f863a4e490917e964da63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba83f94af6bdba81e40e2eb5634e5a1ad11ef35dab2f863a4e490917e964da63->enter($__internal_ba83f94af6bdba81e40e2eb5634e5a1ad11ef35dab2f863a4e490917e964da63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ba83f94af6bdba81e40e2eb5634e5a1ad11ef35dab2f863a4e490917e964da63->leave($__internal_ba83f94af6bdba81e40e2eb5634e5a1ad11ef35dab2f863a4e490917e964da63_prof);

        
        $__internal_f87b0f3fa1c2aae81799c5d86cb290bb78aeac1df48c368acee09df143a5a79e->leave($__internal_f87b0f3fa1c2aae81799c5d86cb290bb78aeac1df48c368acee09df143a5a79e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
