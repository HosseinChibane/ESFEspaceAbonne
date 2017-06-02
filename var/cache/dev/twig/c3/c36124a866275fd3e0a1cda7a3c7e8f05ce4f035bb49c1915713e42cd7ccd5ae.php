<?php

/* @ESFEspaceAbonne/back/mesParametres.html.twig */
class __TwigTemplate_68204178aa916c7c4f523107aaebadccfb1650d0ccd31d2f6499373d0fa93fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesParametres.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98745d625535c3a38731dcc63f447bb34c388c1d234c7c0adab12d6894277c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98745d625535c3a38731dcc63f447bb34c388c1d234c7c0adab12d6894277c9c->enter($__internal_98745d625535c3a38731dcc63f447bb34c388c1d234c7c0adab12d6894277c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametres.html.twig"));

        $__internal_f7de0393f486f5a3c4afc470e4b6769caf2fa44a086c2c9c990fce20633f976d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7de0393f486f5a3c4afc470e4b6769caf2fa44a086c2c9c990fce20633f976d->enter($__internal_f7de0393f486f5a3c4afc470e4b6769caf2fa44a086c2c9c990fce20633f976d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98745d625535c3a38731dcc63f447bb34c388c1d234c7c0adab12d6894277c9c->leave($__internal_98745d625535c3a38731dcc63f447bb34c388c1d234c7c0adab12d6894277c9c_prof);

        
        $__internal_f7de0393f486f5a3c4afc470e4b6769caf2fa44a086c2c9c990fce20633f976d->leave($__internal_f7de0393f486f5a3c4afc470e4b6769caf2fa44a086c2c9c990fce20633f976d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5efa8ec6defadcaf8551290f74b585cafbe7a310cc1dee4ded92876526d6d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5efa8ec6defadcaf8551290f74b585cafbe7a310cc1dee4ded92876526d6d02->enter($__internal_f5efa8ec6defadcaf8551290f74b585cafbe7a310cc1dee4ded92876526d6d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1094812c3ee66f54c34896589a0cd3ed40ae767ca02b18daf993160df9c96827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1094812c3ee66f54c34896589a0cd3ed40ae767ca02b18daf993160df9c96827->enter($__internal_1094812c3ee66f54c34896589a0cd3ed40ae767ca02b18daf993160df9c96827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1094812c3ee66f54c34896589a0cd3ed40ae767ca02b18daf993160df9c96827->leave($__internal_1094812c3ee66f54c34896589a0cd3ed40ae767ca02b18daf993160df9c96827_prof);

        
        $__internal_f5efa8ec6defadcaf8551290f74b585cafbe7a310cc1dee4ded92876526d6d02->leave($__internal_f5efa8ec6defadcaf8551290f74b585cafbe7a310cc1dee4ded92876526d6d02_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_c8b791cf2ed05dbd035d88daef63a06e7770fc39c5528027a47a713d04fe41a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b791cf2ed05dbd035d88daef63a06e7770fc39c5528027a47a713d04fe41a0->enter($__internal_c8b791cf2ed05dbd035d88daef63a06e7770fc39c5528027a47a713d04fe41a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b7d71c81460817dfa0842c5041f26398164537a246426f0e3d837587d5a45e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d71c81460817dfa0842c5041f26398164537a246426f0e3d837587d5a45e53->enter($__internal_b7d71c81460817dfa0842c5041f26398164537a246426f0e3d837587d5a45e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
  <!-- Mes Parametres -->
  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  
  ";
        // line 11
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 12
            echo "    <div class=\"alert alert-error\">
      ";
            // line 13
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    </div>
  ";
        }
        // line 16
        echo "
  <div class=\"col-md-5\">
    <div class=\"form-group\">
      <div>
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
       ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
       ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit"), "html", null, true);
        echo "\" />
      </div>
      ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>            
  </div>      
  ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

  </div>
</div>
";
        
        $__internal_b7d71c81460817dfa0842c5041f26398164537a246426f0e3d837587d5a45e53->leave($__internal_b7d71c81460817dfa0842c5041f26398164537a246426f0e3d837587d5a45e53_prof);

        
        $__internal_c8b791cf2ed05dbd035d88daef63a06e7770fc39c5528027a47a713d04fe41a0->leave($__internal_c8b791cf2ed05dbd035d88daef63a06e7770fc39c5528027a47a713d04fe41a0_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesParametres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  142 => 38,  137 => 36,  133 => 35,  129 => 34,  121 => 29,  115 => 26,  110 => 24,  105 => 22,  101 => 21,  97 => 20,  91 => 16,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block Content %} 
  <!-- Mes Parametres -->
  {{ form_start(form) }}
  
  {% if not form.vars.valid %}
    <div class=\"alert alert-error\">
      {{ form_errors(form) }}
    </div>
  {% endif %}

  <div class=\"col-md-5\">
    <div class=\"form-group\">
      <div>
        {{dump(form)}}
       {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
       {{ form_widget(form) }}
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'change_password.submit'|trans }}\" />
      </div>
      {{ form_end(form) }}
    </div>            
  </div>      
  {{ form_end(form) }}
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{dump(form)}}
    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
    {{ form_end(form) }}

  </div>
</div>
{% endblock %}", "@ESFEspaceAbonne/back/mesParametres.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesParametres.html.twig");
    }
}
