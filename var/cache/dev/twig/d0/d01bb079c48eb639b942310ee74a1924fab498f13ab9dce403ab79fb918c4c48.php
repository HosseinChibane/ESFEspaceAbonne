<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bdb560ca71e435e0b88cfe7a690e5faa5deff9e7e12608602edb4419ea96fc92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_80cec5821c31d56ae53a452434e76b4d990f2ee9429ef4883cfab91411d156e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cec5821c31d56ae53a452434e76b4d990f2ee9429ef4883cfab91411d156e1->enter($__internal_80cec5821c31d56ae53a452434e76b4d990f2ee9429ef4883cfab91411d156e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_b3d9b586dfa12c87f00fcd1f2779e225801d5727cfff7e1674c193833595eba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d9b586dfa12c87f00fcd1f2779e225801d5727cfff7e1674c193833595eba7->enter($__internal_b3d9b586dfa12c87f00fcd1f2779e225801d5727cfff7e1674c193833595eba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80cec5821c31d56ae53a452434e76b4d990f2ee9429ef4883cfab91411d156e1->leave($__internal_80cec5821c31d56ae53a452434e76b4d990f2ee9429ef4883cfab91411d156e1_prof);

        
        $__internal_b3d9b586dfa12c87f00fcd1f2779e225801d5727cfff7e1674c193833595eba7->leave($__internal_b3d9b586dfa12c87f00fcd1f2779e225801d5727cfff7e1674c193833595eba7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61325eb0bfbff45a3b0042221809c509aaed977d3eeb6cffd293d0b420d21e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61325eb0bfbff45a3b0042221809c509aaed977d3eeb6cffd293d0b420d21e34->enter($__internal_61325eb0bfbff45a3b0042221809c509aaed977d3eeb6cffd293d0b420d21e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e274d99f15f12a4b3f7e337f4ede4453ebcb9a483509c840790ef92b3262e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e274d99f15f12a4b3f7e337f4ede4453ebcb9a483509c840790ef92b3262e31->enter($__internal_6e274d99f15f12a4b3f7e337f4ede4453ebcb9a483509c840790ef92b3262e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6e274d99f15f12a4b3f7e337f4ede4453ebcb9a483509c840790ef92b3262e31->leave($__internal_6e274d99f15f12a4b3f7e337f4ede4453ebcb9a483509c840790ef92b3262e31_prof);

        
        $__internal_61325eb0bfbff45a3b0042221809c509aaed977d3eeb6cffd293d0b420d21e34->leave($__internal_61325eb0bfbff45a3b0042221809c509aaed977d3eeb6cffd293d0b420d21e34_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
