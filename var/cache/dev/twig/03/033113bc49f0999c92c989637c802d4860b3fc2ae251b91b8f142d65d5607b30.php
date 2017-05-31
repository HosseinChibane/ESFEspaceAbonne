<?php

/* ESFEspaceAbonneBundle:back:mesParametres.html.twig */
class __TwigTemplate_93e879d1f011c414128e2310be2885d59b7695cc9e8f10f18b3fefcd9e4034c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesParametres.html.twig", 1);
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
        $__internal_5424587c65c09ae19db41bf88f57b6a3269495af7128f25ca56c852f53349be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5424587c65c09ae19db41bf88f57b6a3269495af7128f25ca56c852f53349be1->enter($__internal_5424587c65c09ae19db41bf88f57b6a3269495af7128f25ca56c852f53349be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametres.html.twig"));

        $__internal_2f8de1d8487e6e1e5eead3907e869cdc4e9ac866fba18efce408c85ec6697d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8de1d8487e6e1e5eead3907e869cdc4e9ac866fba18efce408c85ec6697d8a->enter($__internal_2f8de1d8487e6e1e5eead3907e869cdc4e9ac866fba18efce408c85ec6697d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5424587c65c09ae19db41bf88f57b6a3269495af7128f25ca56c852f53349be1->leave($__internal_5424587c65c09ae19db41bf88f57b6a3269495af7128f25ca56c852f53349be1_prof);

        
        $__internal_2f8de1d8487e6e1e5eead3907e869cdc4e9ac866fba18efce408c85ec6697d8a->leave($__internal_2f8de1d8487e6e1e5eead3907e869cdc4e9ac866fba18efce408c85ec6697d8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68a4eba598f7b04fdef3e59167f4916647d32b8c1b46ecbf95be2bc3ed1f1037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a4eba598f7b04fdef3e59167f4916647d32b8c1b46ecbf95be2bc3ed1f1037->enter($__internal_68a4eba598f7b04fdef3e59167f4916647d32b8c1b46ecbf95be2bc3ed1f1037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7b57c96d5df507442f89d19b5e31097b37c3d30f761136ad6d55609285726d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b57c96d5df507442f89d19b5e31097b37c3d30f761136ad6d55609285726d5->enter($__internal_d7b57c96d5df507442f89d19b5e31097b37c3d30f761136ad6d55609285726d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d7b57c96d5df507442f89d19b5e31097b37c3d30f761136ad6d55609285726d5->leave($__internal_d7b57c96d5df507442f89d19b5e31097b37c3d30f761136ad6d55609285726d5_prof);

        
        $__internal_68a4eba598f7b04fdef3e59167f4916647d32b8c1b46ecbf95be2bc3ed1f1037->leave($__internal_68a4eba598f7b04fdef3e59167f4916647d32b8c1b46ecbf95be2bc3ed1f1037_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_d1ade6f42654ea6f8a9606acc64e6c867c6aaedfe41e49250299c05fa0f6dedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ade6f42654ea6f8a9606acc64e6c867c6aaedfe41e49250299c05fa0f6dedd->enter($__internal_d1ade6f42654ea6f8a9606acc64e6c867c6aaedfe41e49250299c05fa0f6dedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_8d2ceb2f223b3479748138feaf0e372579dc74fa1d1520d44a539e2463deb42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2ceb2f223b3479748138feaf0e372579dc74fa1d1520d44a539e2463deb42f->enter($__internal_8d2ceb2f223b3479748138feaf0e372579dc74fa1d1520d44a539e2463deb42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_8d2ceb2f223b3479748138feaf0e372579dc74fa1d1520d44a539e2463deb42f->leave($__internal_8d2ceb2f223b3479748138feaf0e372579dc74fa1d1520d44a539e2463deb42f_prof);

        
        $__internal_d1ade6f42654ea6f8a9606acc64e6c867c6aaedfe41e49250299c05fa0f6dedd->leave($__internal_d1ade6f42654ea6f8a9606acc64e6c867c6aaedfe41e49250299c05fa0f6dedd_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesParametres.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:back:mesParametres.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesParametres.html.twig");
    }
}
